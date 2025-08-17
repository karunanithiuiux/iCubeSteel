<?php include 'header.php'; ?>

<!-- home content -->
<main class="cus-mt-5">
    <!-- banner -->
    <section class="pt-lg-5 position-relative">
        <div class="container py-lg-5">
            <div class="row  px-lg-5 py-lg-5 px-3 py-3 justify-content-center align-items-center">
                <div class="col-lg-6 col-12 order-lg-1 order-2">
                    <p class="fs-3">Practical Solutions for Every Project</p>
                    <h1 class="text-blue display-5">
                        Your Trusted Companion for Design &
                        <span id="typed-text" class="text-primary"></span>
                        <p>Solutions</p>
                    </h1>
                    <p class="fs-5">Your Project, Our Expertise, One Team</p>
                    <button type="button" class="btn btn-primary rounded-pill px-4 py-3">CONTACT NOW</button>
                </div>

                <div class="col-lg-6 col-12 order-lg-2 order-1 mb-5 ">
                    <div class=" text-center">
                        <img src="assets/home-banner.png"
                            class="position-absolute d-lg-flex d-none top-50 end-0 translate-middle-y z-n1 img-fluid shape-img"
                            width="700" height="1000" alt="home-banner">
                        <img src="assets/home-banner.png" class="d-lg-none d-flex img-fluid shape-img" width="700"
                            height="1000" alt="home-banner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="py-5">
        <div class="container">
            <div class="row py-lg-5 px-3 pt-5 align-items-center justify-content-center mx-lg-5">
                <div class="col-lg-6 col-12">
                    <h2 class="text-lg-center text-blue display-1">
                        Welcome to iCubeSteel
                    </h2>
                </div>
                <div class="col-lg-6 col-12">
                    <p>At iCubeSteel, We focus on engineering excellence by
                        combining extensive industrial knowledge with advanced
                        design expertise. Our experienced team, composed of
                        specialists from within our company and a broad network,
                        delivers complete, practical solutions and fabrication-ready
                        detailed drawings. This collaborative approach ensures we
                        meet every challenge with speed, precision, and reliability.</p>
                </div>
            </div>
        </div>
        <!-- <div class=" text-end">
            <img src="assets/gobal-map.png" class="img-fluid" alt="gobal-map">
        </div> -->
    </section>

    <!-- services -->
    <section>
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-1">
                <div class="col mb-3 py-lg-5 py-3 px-3 px-lg-5 bg-blue-card rounded-2">
                    <div class=" border rounded-3 h-100 p-3">
                        <div class="pb-3">
                            <img src="assets/home-card-1.png" class="card-img-top img-fluid" alt="home-card-1">
                        </div>
                        <div>
                            <svg width="32" height="32" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0_425_93" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="16" height="16">
                                    <rect width="16" height="16" fill="url(#pattern0_425_93)" />
                                </mask>
                                <g mask="url(#mask0_425_93)">
                                    <circle cx="8.21577" cy="8.21577" r="13.8378" fill="#1E2A5E" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_425_93" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_425_93" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_425_93" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>


                            <span class=" fw-bold fs-6 text-blue">STRUCTURAL STEEL DETAILING</span>
                        </div>
                        <div class="pt-2">
                            <p>Our experienced team delivers precise estimation, modeling, and detailing services for
                                residential, commercial, and industrial projects, ensuring efficiency and accuracy at
                                every stage.</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-3 py-lg-5 py-3 px-3 px-lg-5 bg-blue-card rounded-2">
                    <div class=" border rounded-3 h-100 p-3">
                        <div class="pb-3">
                            <img src="assets/home-card-2.png" class="card-img-top img-fluid" alt="home-card-2">
                        </div>
                        <div>
                            <svg width="32" height="32" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0_425_98" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="16" height="16">
                                    <rect width="16" height="16" fill="url(#pattern0_425_98)" />
                                </mask>
                                <g mask="url(#mask0_425_98)">
                                    <circle cx="8" cy="8" r="10" fill="#1E2A5E" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_425_98" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_425_98" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_425_98" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>


                            <span class=" fw-bold fs-6 text-blue">MECHANICAL ENGINEERING</span>
                        </div>
                        <div class="pt-2">
                            <p>Our mechanical engineering team
                                delivers complete working CAD
                                models, fabrication support, and
                                detailed documentation to ensure
                                smooth project execution from
                                design to production.</p>
                        </div>
                    </div>
                </div>

                <div class="col mb-3 py-lg-5 py-3 px-3 px-lg-5 bg-blue-card rounded-2">
                    <div class=" border rounded-3 h-100 p-3">
                        <div class="pb-3">
                            <img src="assets/home-card-3.png" class="card-img-top img-fluid rounded-3"
                                alt="home-card-3">
                        </div>
                        <div>
                            <svg width="28" height="28" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0_425_104" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="14" height="14">
                                    <rect width="14" height="14" fill="url(#pattern0_425_104)" />
                                </mask>
                                <g mask="url(#mask0_425_104)">
                                    <circle cx="7" cy="7" r="10" fill="#1E2A5E" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_425_104" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_425_104" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_425_104" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                            <span class=" fw-bold fs-6 text-blue">ENGINEERING CAD DOCUMENTATION</span>
                        </div>
                        <div class="pt-2">
                            <p>iCubeSteel delivers precise and
                                standardized engineering CAD
                                documentation solutions, converting
                                design concepts into detailed 2D and
                                3D drawings tailored for engineering,
                                fabrication, and construction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- we  -->
    <section class="we-section cus-box">
        <div class="container">
            <div class="row justify-content-md-center justify-content-between align-items-center">
                <div class="col-md-auto col-4 sticky-we">
                    <h1 class="we-font mt-md-5">WE</h1>
                </div>
                <div class="col-md-auto col-6 content-lines text-lg-start text-center">
                    <div class="line">stay curious, always</div>
                    <div class="line">collaborate seamlessly</div>
                    <div class="line">are ready to take-off your Projects</div>
                </div>
            </div>
        </div>
    </section>

    <!-- project with confidence -->
    <section class="">
        <div class="container">
            <div class="row  py-5 px-3 justify-content-center align-items-center">
                <div class="col-lg-8 card-hover-border col-12 text-center p-5 cus-bg-secondary rounded-3">
                    <!-- <h2>Start your next project with confidence.</h2> -->
                    <h2> Start Your Next Project with Confidence.</h2>

                    <p>Contact our engineering team for a free consultation today</p>
                    <button type="button" class="btn btn-primary rounded-pill px-3">Request a Quote</button>
                </div>
            </div>
        </div>
    </section>



</main>

<?php include 'footer.php'; ?>