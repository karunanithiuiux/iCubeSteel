<?php include 'header.php'; ?>

<!-- Styles -->
<style>
#chartdiv {
    width: 100%;
    height: 500px;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/data/countries2.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

    // Create root and theme
    var root = am5.Root.new("chartdiv");
    root.setThemes([am5themes_Animated.new(root)]);

    // Create the map chart
    var chart = root.container.children.push(
        am5map.MapChart.new(root, {
            panX: "rotateX",
            projection: am5map.geoMercator(),
            wheelY: "none",
            wheelX: "none"
        })
    );

    var colorSet = am5.ColorSet.new(root, {});

    // Default gray fill used for all countries
    var DEFAULT_GRAY = am5.color(0xcccccc);
    var HOVER_GRAY = am5.color(0xbfbfbf);

    // Custom colors map (ISO2)
    var customColors = {
        "US": am5.color(0xcccccc), // United States
        "CA": am5.color(0xcccccc), // Canada
        "AU": am5.color(0xcccccc) // Australia
    };

    // Europe group - add many common European ISO2 codes to the same color
    var europeColor = am5.color(0xcccccc);
    var europeCodes = [
        "AL", "AD", "AM", "AT", "BY", "BE", "BA", "BG", "HR", "CY", "CZ", "DK", "EE", "FO", "FI", "FR",
        "GE", "DE", "GI", "GR", "HU", "IS", "IE", "IT", "LV", "LI", "LT", "LU", "MT", "MD", "MC", "ME",
        "NL", "MK", "NO", "PL", "PT", "RO", "RU", "SM", "RS", "SK", "SI", "ES", "SE", "CH", "TR", "UA", "GB"
    ];
    europeCodes.forEach(function(c) {
        customColors[c] = europeColor;
    });

    // Add explicit Europe color to the legend mapping as well (for the list)
    // Create world polygon series
    var worldSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        geoJSON: am5geodata_worldLow,
        exclude: ["AQ"] // remove Antarctica
    }));

    // Default styling (gray)
    worldSeries.mapPolygons.template.setAll({
        tooltipText: "{name}",
        interactive: true,
        fill: DEFAULT_GRAY,
        stroke: am5.color(0xffffff),
        strokeWidth: 0.5
    });

    worldSeries.mapPolygons.template.states.create("hover", {
        fill: HOVER_GRAY
    });

    // Adapter to color specific countries
    worldSeries.mapPolygons.template.adapters.add("fill", function(fill, target) {
        try {
            var id = target.dataItem && target.dataItem.get("id");
            if (id && customColors[id]) {
                return customColors[id];
            }
        } catch (e) {
            /* ignore */
        }
        return fill;
    });

    // Data array (map + id) — uses countries2 data loaded from CDN
    var data = [];
    for (var id in am5geodata_data_countries2) {
        if (am5geodata_data_countries2.hasOwnProperty(id)) {
            var country = am5geodata_data_countries2[id];
            if (country.maps && country.maps.length) {
                var fillColor = (customColors[id] ? customColors[id] : DEFAULT_GRAY);
                data.push({
                    id: id,
                    map: country.maps[0],
                    polygonSettings: {
                        fill: fillColor
                    }
                });
            }
        }
    }
    worldSeries.data.setAll(data);

    // Country series for drill-down (initially hidden)
    var countrySeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
        visible: false
    }));

    countrySeries.mapPolygons.template.setAll({
        tooltipText: "{name}",
        interactive: true,
        stroke: am5.color(0xffffff),
        strokeWidth: 0.5
    });
    countrySeries.mapPolygons.template.states.create("hover", {
        fill: HOVER_GRAY
    });

    // Simple client-side cache for loaded JSONs
    var loadedMaps = {};

    // Click on world map polygon -> zoom + load country geodata
    worldSeries.mapPolygons.template.events.on("click", function(ev) {
        var dataItem = ev.target.dataItem;
        if (!dataItem) return;
        var ctx = dataItem.dataContext;
        if (!ctx || !ctx.map) return;

        // Zoom animation
        var zoomAnimation = worldSeries.zoomToDataItem(dataItem);

        // If already cached, apply immediately after zoom
        if (loadedMaps[ctx.map]) {
            zoomAnimation.waitForStop().then(function() {
                countrySeries.set("geoJSON", loadedMaps[ctx.map]);
                countrySeries.mapPolygons.template.setAll({
                    fill: ctx.polygonSettings.fill
                });
                countrySeries.show();
                worldSeries.hide();
                document.getElementById("btn-back").style.display = "inline-block";
            });
        } else {
            // load country json then set
            Promise.all([
                zoomAnimation.waitForStop(),
                am5.net.load("https://cdn.amcharts.com/lib/5/geodata/json/" + ctx.map + ".json")
            ]).then(function(results) {
                var response = results[1].response;
                var geodata = am5.JSONParser.parse(response);
                loadedMaps[ctx.map] = geodata;
                countrySeries.set("geoJSON", geodata);
                // fill subdivisions with the country's color so zoomed-in view keeps color
                countrySeries.mapPolygons.template.setAll({
                    fill: ctx.polygonSettings.fill
                });
                countrySeries.show();
                worldSeries.hide();
                document.getElementById("btn-back").style.display = "inline-block";
            }).catch(function(err) {
                console.error("Failed to load country map:", err);
            });
        }
    });

    // Back button (HTML) to return home
    document.getElementById("btn-back").addEventListener("click", function() {
        chart.goHome();
        countrySeries.hide();
        worldSeries.show();
        this.style.display = "none";
    });

    // Optional: clicking legend items could attempt to zoom to representative country
    // (Europe uses "FR" as representative). This is a convenience; if not desired you can remove.
    var legendZoomMap = {
        "United States": "US",
        "Canada": "CA",
        "Europe": "FR",
        "Australia": "AU"
    };

    // Add click handler to legend (delegated)
    document.querySelector(".legend").addEventListener("click", function(e) {
        var li = e.target.closest("li");
        if (!li) return;
        var text = li.textContent.trim();
        var iso = legendZoomMap[text];
        if (!iso) return;
        // find dataItem by id
        var di;
        try {
            di = worldSeries.getDataItemById(iso);
        } catch (e) {
            di = null;
        }
        // fallback search
        if (!di) {
            worldSeries.dataItems.each(function(item) {
                try {
                    if (item.get("dataContext") && item.get("dataContext").id === iso) di =
                        item;
                } catch (e) {}
            });
        }
        if (di) {
            worldSeries.zoomToDataItem(di).then(function() {
                // if you want to automatically drill down on legend click for that country,
                // you could simulate clicking the polygon. For now we only zoom.
                document.getElementById("btn-back").style.display = "inline-block";
            });
        } else {
            console.warn("No country data item for", iso);
        }
    });

    // Clean up on page unload
    window.addEventListener("beforeunload", function() {
        root.dispose();
    });

}); // end am5.ready
</script>


<!-- contact-us content -->
<main class=" overflow-hidden">
    <!-- banner lg -->
    <!-- <section class="position-relative cus-margin-top d-lg-flex d-none">
            <div class="container ">
                <div class="row  py-lg-0 py-5 cus-vh-100 align-items-lg-center align-items-end justify-content-center ">
                    <div class="col-lg-6 col-auto">
                        <div class="p-5 cus-bg-body-secondary rounded-3 ">
                            <h1>We Set the Standard for Quality in Design and Engineering</h1>
                        </div>
                    </div>
                    <div class="col">
                        <img src="assets/about-bg.png" class="position-absolute z-n1 top-50 end-0 translate-middle-y"
                            alt="about-bg">
                    </div>
                </div>
            </div>
        </section> -->
    <!-- banner md -->
    <section class="cus-margin-top my-5 about-section">
        <div class="container">
            <div class="row vh-100 align-items-center justify-content-center py-5">
                <div class="col">
                    <div class="p-5 cus-bg-body-secondary rounded-3">
                        <h1 class="d-lg-flex d-none text-center">We Set the Standard for Quality in Design and
                            Engineering</h1>
                        <h4 class="d-lg-none d-flex">We Set the Standard for Quality in Design and Engineering</h4>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about -->
    <section>
        <div class="">
            <div class="row justify-content-center align-items-lg-stretch">
                <div class="col-lg-10 col">
                    <div>
                        <h2 class=" text-blue fw-bold">About iCubeSteel</h2>
                    </div>
                    <div>
                        <p>iCubeSteel is a team of experienced engineers delivering comprehensive mechanical and
                            structural steel detailing services for residential,
                            commercial, and industrial projects. Leveraging the latest technology, we provide
                            precise, fabrication ready engineering details aligned with
                            modern industry needs.</p>
                    </div>
                    <div>
                        <p>Our expertise cover all aspects of structural steel detailing, mechanical engineering,
                            and drafting including fabrication details and equipment
                            layouts. A key component of our process is close collaboration with structural engineers
                            and fabricators. We actively engage with them
                            throughout each project to gain insights on practical fabrication challenges and
                            production efficiencies.</p>
                    </div>
                    <div>
                        <p>By maintaining continuous communication and feedback loops, we ensure every drawing is
                            clear, accurate, and optimized for streamlined
                            construction and fabrication. This collaborative approach allows us to deliver
                            engineering solutions that enhance constructability, improve
                            efficiency, and minimize errors supporting your project’s success from design through
                            execution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- mision vision -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col card-hover-border">
                    <div class="p-4">
                        <div class="p-5 text-center">
                            <svg width="128" height="128" viewBox="0 0 128 128" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="128" height="128" fill="url(#pattern0_448_11)" />
                                <defs>
                                    <pattern id="pattern0_448_11" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_448_11" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_448_11" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="py-3 text-center">
                            <svg width="170" height="11" viewBox="0 0 170 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="170" height="3" rx="1.5" transform="matrix(1 0 0 -1 0 7)" fill="#616161" />
                                <path
                                    d="M85.5 0.5C88.8953 0.5 91.5 2.81362 91.5 5.5C91.5 8.18638 88.8953 10.5 85.5 10.5C82.1047 10.5 79.5 8.18638 79.5 5.5C79.5 2.81362 82.1047 0.5 85.5 0.5Z"
                                    fill="black" stroke="white" />
                            </svg>


                        </div>
                        <h4 class=" text-blue pt-4 fs-2">OUR VALUES</h4>
                        <p>At iCubeSteel, we combine practical engineering expertise with clear, precise
                            documentation. Through detailed drawings and specifications, we ensure seamless
                            communication that drives efficient project workflows and successful outcomes.</p>
                    </div>
                </div>
                <div class="col card-hover-border">
                    <div class="p-4">
                        <div class="p-5 text-center">
                            <svg width="120" height="120" viewBox="0 0 128 128" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="128" height="128" fill="url(#pattern0_448_12)" />
                                <defs>
                                    <pattern id="pattern0_448_12" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_448_12" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_448_12" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="py-3 text-center">
                            <svg width="170" height="11" viewBox="0 0 170 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="170" height="3" rx="1.5" transform="matrix(1 0 0 -1 0 7)" fill="#616161" />
                                <path
                                    d="M85.5 0.5C88.8953 0.5 91.5 2.81362 91.5 5.5C91.5 8.18638 88.8953 10.5 85.5 10.5C82.1047 10.5 79.5 8.18638 79.5 5.5C79.5 2.81362 82.1047 0.5 85.5 0.5Z"
                                    fill="black" stroke="white" />
                            </svg>


                        </div>
                        <h4 class=" text-blue pt-4 fs-2">OUR MISSION</h4>
                        <p>We strive to deliver customized, practical engineering solutions tailored to the distinct
                            needs of each client. Our commitment is to help projects progress smoothly and meet the
                            highest quality benchmarks, from concept through completion.</p>
                    </div>
                </div>
                <div class="col card-hover-border">
                    <div class="p-4">
                        <div class="p-5 text-center">
                            <svg width="128" height="128" viewBox="0 0 128 128" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="120" height="120" fill="url(#pattern0_449_14)" />
                                <defs>
                                    <pattern id="pattern0_449_14" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_449_14" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_449_14" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="py-3 text-center">
                            <svg width="170" height="11" viewBox="0 0 170 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="170" height="3" rx="1.5" transform="matrix(1 0 0 -1 0 7)" fill="#616161" />
                                <path
                                    d="M85.5 0.5C88.8953 0.5 91.5 2.81362 91.5 5.5C91.5 8.18638 88.8953 10.5 85.5 10.5C82.1047 10.5 79.5 8.18638 79.5 5.5C79.5 2.81362 82.1047 0.5 85.5 0.5Z"
                                    fill="black" stroke="white" />
                            </svg>


                        </div>
                        <h4 class=" text-blue pt-4 fs-2">OUR VISION</h4>
                        <p>We aim to build lasting partnerships by deeply understanding our client’s goals and
                            challenges. Through continuous innovation and dedicated service, we seek to be the
                            trusted engineering partner that consistently enhances project delivery and value.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Stand For -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class=" text-blue fw-bold">What We Stand For</h2>
                    <div class="text-center">
                        <img src="assets/corevalues.png" width="600" class=" img-fluid" alt="corevALUE">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- marquee logo -->
    <div class="marquee-container my-5">
        <div class="marquee-content">
            <div class="marquee-content-wrapper">
                <!-- Duplicate for seamless looping -->
                <div class="card px-5">
                    <img src="assets/marquee-logo/1.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/2.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/3.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/4.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/5.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/1.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/2.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/3.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/4.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>
                <div class="card px-5">
                    <img src="assets/marquee-logo/5.png" class=" img-fluid" width="" alt="marquee-logo">
                </div>

            </div>
        </div>
    </div>

    <div class=" text-center my-5">
        <h3 class=" text-blue">No matter where you are, we’re with you every step of the way.</h3>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div id="chartdiv" style="width:100%; height:500px; overflow:hidden;"></div>
            </div>
            <ul class="country-list d-flex justify-content-center flex-wrap mt-4 gap-3">
                <li><span class=" bg-secondary p-2 rounded-circle "></span><span class="ps-2">United States</span></li>
                <li><span class=" bg-secondary p-2 rounded-circle "></span><span class="ps-2">Canada</span></li>
                <li><span class=" bg-secondary p-2 rounded-circle "></span><span class="ps-2">Europe </span></li>
                <li><span class=" bg-secondary p-2 rounded-circle "></span><span class="ps-2">Australia </span></li>
            </ul>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row my-5 justify-content-center align-items-center">
                <div class="col text-center">
                    <h2>Our Global Reach</h2>
                    <p> We proudly deliver engineering solutions to clients in the United States, Canada, Europe,
                        Australia, and beyond.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>