<?php include 'header.php'; ?>

<style>
/* Adjust slide style */
.swiper-slide {
    background: #f8f9fa;
    border-radius: 10px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.swiper-slide:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}
</style>



<!-- contact-us content -->
<main class="cus-mt-5">
    <!-- banner -->
    <!-- <section>
            <div class="container-fluid py-5 position-relative">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-2.png" class="img-fluid" alt="banner-2">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div>
                                <img src="assets/services/banner-1.png" class="img-fluid" alt="banner-1">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div
                    class=" col-lg-4 col-10 text-lg-start text-center p-lg-5  position-absolute top-50 cus-ms-8 translate-middle-y z-1">
                    <h1 class=" text-white opacity-75 bg-dark rounded-3 p-5">We prove our professionalism by actions
                    </h1>
                </div>
            </div>
        </section> -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner position-relative">
            <div class="carousel-item active">
                <img src="assets/services/banner-1.png" class="img-fluid d-block w-100" alt="banner-1">

            </div>
            <div class="carousel-item">
                <img src="assets/services/banner-2.png" class="img-fluid d-block w-100" alt="banner-1">
            </div>
            <div class="carousel-item">
                <img src="assets/services/banner-1.png" class="img-fluid d-block w-100" alt="banner-1">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="position-absolute d-lg-flex bottom-0 start-0">
            <h2 class=" text-white bg-light text-blue text-lg-start text-center rounded-top px-5 pt-3 pb-3 mb-0">We prove our professionalism by actions
            </h2>
        </div>
        <div class="d-lg-none bottom-0 start-0">
            <h2 class=" text-white bg-light text-blue text-lg-start text-center rounded-top px-5 pt-3 pb-3 mb-0">We prove our professionalism by actions
            </h2>
        </div>
    </div>

    <div class="py-5 text-blue text-center">
        <h3 class="fw-bold fs-1">Our Services</h3>
    </div>

    <!-- about -->
    <section>
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-1 align-items-center justify-content-center">
                <div class="col">
                    <div class=" text-center pb-5">
                        <img src="assets/services/about.png" class="img-fluid" alt="about-img">
                    </div>
                </div>
                <div class="col">
                    <h2 class=" text-blue fw-bold">Structural Steel Detailing Service</h2>
                    <p>At iCubeSteel, we specialize in expert Tekla Structures design and steel detailing
                        tailored precisely to your project’s needs. Using Tekla Structures, a leading 3D
                        modeling software, we create highly accurate, fabrication-ready models that
                        enhance precision and efficiency. Our services cover a wide range of sectors,
                        including residential, commercial, industrial buildings, bridges, and infrastructure
                        projects. We combine advanced technology with deep industry knowledge to deliver
                        detailed steel solutions that streamline fabrication and construction for every
                        project type.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Area & Sector Coverage -->
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-4">
                    <h2 class=" text-blue fw-bold">Area & Sector Coverage</h2>
                </div>
            </div>
            <!-- card  -->
            <div class="row row-cols-md-2 row-cols-1 g-4">
                <div class="col">
                    <div class="p-4 border rounded-3 h-100 card-smooth-ani">
                        <div class="pb-4">
                            <img src="assets/services/card-1.png" class=" img-fluid" alt="card-1">
                        </div>
                        <div class="">
                            <h3>1. Structural Steel Detailing</h3>
                            <p>we specialize in providing comprehensive detailing
                                services tailored to meet the unique needs of your project.
                                Our team of experienced professionals is dedicated to
                                delivering high-quality, accurate, and efficient detailing
                                solutions that ensure your project’s success</p>
                        </div>
                        <div>
                            <h6>Deliverables</h6>
                            <ul>
                                <li>Detailed Quotations with Defined Scope</li>
                                <li>Pre-Detailing Coordination with Clients.</li>
                                <li>Anchor Bolt Layout Plans.</li>
                                <li>Preparing erection drawings for client approval.</li>
                                <li>Request for Information (RFI) Management.</li>
                                <li>Fabrication Drawings.</li>
                                <li>Machine files in formats such as NC, DXF, XML, IFC, KISS,
                                    per client specification for automated fabrication
                                    workflows.</li>
                                <li>Coordination Drawings for Seamless Integration.</li>
                                <li>Comprehensive material lists, bolt schedules, and
                                    shipping bills to streamline procurement and logistics.</li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="col">
                    <div class="p-4 border rounded-3 h-100 card-smooth-ani">
                        <div class="pb-4">
                            <img src="assets/services/card-2.png" class=" img-fluid" alt="card-1">
                        </div>
                        <div class="">
                            <h3>2. Miscellaneous Steel Detailing:</h3>
                            <p>With extensive industry experience, our skilled team
                                delivers precise detailing across a wide range of
                                miscellaneous steel components, fully compliant with
                                applicable building codes. We also offer cost-effective,
                                customized solutions for fabricators to meet unique project
                                needs.</p>
                        </div>
                        <div>
                            <h6>Deliverables</h6>
                            <ul>
                                <li>. Detailed shop drawings for various stairs with landing
                                    frames, handrails, and guardrails.</li>
                                <li>Accurate ladder detailing including elevator pit, roof
                                    access, and cage ladders.</li>
                                <li>Fabrication drawings for gratings, floor plates, gate frames, bollards, elevator
                                    sump pit frames, grates, and
                                    vanity support framing.</li>
                                <li>3D models and CNC files in required formats for smooth
                                    fabrication and installation.</li>
                                <li>Complete material take-offs and bill of materials for
                                    efficient procurement and cost control.</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 border rounded-3 h-100 card-smooth-ani">
                        <div class="pb-4">
                            <img src="assets/services/card-3.png" class=" img-fluid" alt="card-1">
                        </div>
                        <div class="">
                            <h3>3. Connection Design:</h3>
                            <p>Precision-engineered steel connection designs that meet
                                structural requirements and simplify fabrication. Our
                                expert engineers collaborate closely with designers to
                                deliver cost effective, code compliant solutions using
                                advanced software for error free, seamless integration in
                                Tekla Structures.</p>
                        </div>
                        <div>
                            <h6>Deliverables</h6>
                            <ul>
                                <li>Shear connections tailored for diverse load conditions.</li>
                                <li>Moment connections in multiple configurations ensuring rigidity and flexibility.
                                </li>
                                <li>Torsional connections engineered to manage rotational
                                    forces efficiently.</li>
                                <li>Axial force connections customized for precise load
                                    transfer.</li>
                                <p>We expertly handle connections across diverse
                                    topographies and structural challenges, ensuring integrity
                                    and constructability</p>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 border rounded-3 h-100 card-smooth-ani">
                        <div class="pb-4">
                            <img src="assets/services/card-4.png" class=" img-fluid" alt="card-1">
                        </div>
                        <div class="">
                            <h3>4. Estimation/Quantity Take off:</h3>
                            <p>Expert estimation and quantity takeoff—delivering precise,
                                quality results on tight deadlines to support competitive
                                tendering and confident project planning for your next
                                construction or fabrication.</p>
                        </div>
                        <div>
                            <h6>Deliverables</h6>
                            <ul>
                                <li>Material lists detailing all procurement needs for your
                                    project.</li>
                                <li>Organized materials by section type for precise planning
                                    and analysis.</li>
                                <li>Dedicated listing of steel parts needing unique coatings
                                    or preparations.</li>
                                <li>Specific documentation of elements requiring
                                    galvanizing for durability.</li>
                                <li>Clear 3D models (IFC files) to aid project understanding
                                    and coordination.</li>
                                <li>. Requests for Information (RFI) sent promptly whenever
                                    further clarification is necessary to ensure project
                                    alignment.</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Mechanical Engineering Services -->
    <section class="py-5">
        <div class="container">
            <div class="row py-5 align-items-center justify-content-center row-cols-lg-2 row-cols-1">
                <div class="col order-lg-1 order-2">
                    <div>
                        <h2 class=" text-blue fw-bold">Comprehensive Mechanical Engineering Services</h2>
                        <p>At iCubeSteel, We offer complete mechanical engineering solutions, tailored
                            to support your project from initial concept through to production. Our experienced
                            team utilizes the latest engineering tools and technology to deliver accurate,
                            efficient, and cost effective results.</p>
                        <p>Our end-to-end services are designed to ensure accuracy, speed, and full compliance
                            with project specifications enabling your success from concept to production.</p>
                        <p>Flexible engineering support tailored to your unique project needs.</p>
                    </div>
                </div>
                <div class="col order-lg-2 order-1">
                    <div class="pb-lg-0 pb-5">
                        <img src="assets/services/desgin-modal.png" class=" img-fluid" alt="desgin-modal">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card-9 -->
    <section>
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1">
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_409_16" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_409_16)" />
                                </mask>
                                <g mask="url(#mask0_409_16)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_409_16" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_409_16" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_409_16" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>Design & Development</h3>
                            <p>Bringing your ideas to life with
                                innovative, robust engineering
                                concepts.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_47" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_47)" />
                                </mask>
                                <g mask="url(#mask0_414_47)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_47" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_47" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_47" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>3D CAD Modelling</h3>
                            <p>Advanced 3D and 2D CAD
                                modelling for precise
                                visualization and validation of
                                every component.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_12" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_12)" />
                                </mask>
                                <g mask="url(#mask0_414_12)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_12" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_12" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_12" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>Engineering Modification</h3>
                            <p>Modifying and enhancing
                                existing designs for improved
                                performance or specific
                                requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_52" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_52)" />
                                </mask>
                                <g mask="url(#mask0_414_52)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_52" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_52" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_52" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                        <div class="">
                            <h3>Reverse Engineering</h3>
                            <p>Reconstructing detailed
                                models and drawings from
                                physical parts or legacy data</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_57" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_57)" />
                                </mask>
                                <g mask="url(#mask0_414_57)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_57" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_57" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_57" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>
                        <div class="">
                            <h3>2D Drafting</h3>
                            <p>High-quality, standards-
                                compliant drawings for
                                fabrication and assembly</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_62" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_62)" />
                                </mask>
                                <g mask="url(#mask0_414_62)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_62" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_62" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_62" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>Complete Part List</h3>
                            <p>Comprehensive bill of
                                materials (BOM) with detailed
                                specifications for every part.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_67" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="14" y="13"
                                    width="37" height="37">
                                    <rect x="14" y="13" width="37" height="37" fill="url(#pattern0_414_67)" />
                                </mask>
                                <g mask="url(#mask0_414_67)">
                                    <circle cx="32" cy="31" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_67" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_67" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_67" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAACXBIWXMAAAOwAAADsAEnxA+tAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAACfJJREFUeJztnXusHUUdxz/n2nt7LY+CYBUpCAVJESsgICI3am1UbBWQl4DGGAFNQKJSEhTfokYNj1iRVsEmNpJQUqWhhaoxWB9UTZFIFattqJQopfRqW4sFbu/DP349uefsmTln9jE7szvzSSawp7Mzv93f9+7OzuM3EA4N4HpgFXCFY1siDrgcmGhJb3Frjh/0uTagRE5NHJ/mxArPCEkAjcRxSNeuJd6EwIkCCJwogMCJAgicKIDAiQIInCiAwIkCCJwogMCJAgicKIDACUkAexPH/3NiRTvnAw8AnwemOLal9rwOeA4ZCt4BHOnWHD4GjDM5PP0Jt+aEwdHABcAMx3YknT8BfN+pRZHSUDn/eeANLo2KlMOVwBjtzn8ReI9LoyLlEJ0fMNH5nvF2YCXwM+BO4EZgAfAKC3Xp3vnnWKgrYsDJwAjtDmlNfwduA+aSv58kOr8A+oHzgNuBnyIdJ4uQTpSBDOV9Ab3zk2kr8GWyPRmi8wtgHrAZvYOeAi5KWebNXcrTpeeBO4AjDOtYQHR+bi4D9mHmoJtSlJtFAM20B/gs8lTqxmKi83MxB7lpaZzzIcOy8wigmf4EnNKljvOIzs/FnaR3ynZgmkHZRQig6dgru9TzbuAzwIlGVxxpowHMBzaRzimXG5StE8B/geuA9wF37T82qfM7hDWqWiqDwA8wF4DJgIpOAJ9K5DsIuAF5svSqdzm92wURBYcBs+jdul6ImQAeNKhTJ4D5mvwH7z+nW99BUwQvMag/eE5H/qq30X4DnwV+BLxJc94N9BbALw3q1wngfmBqD7v/1qP+xQb1B8sM4B7M/pKXAYcqyljV47w8ApgAtiATMw7SnHsg0n3czYZrDGwIjpOAJ0nXoPsr8KpEOcfSOahSpACaaTfwTcThSQaQJ5Xu3BHgDAM7guFo4F+kc36rQ5Mt7OEe+XuR5jPwH8A7FGU0gG93OW8TcICBLbWnAawlm/Ob6XYmgzt8oEfeogUwgXTp3kqnEPuA+7qc9y0DW2rPxeRzfjM9DjxqkM+GAJppOZ2NxAOBxzT5R4DXGthTa9ZSjABMk00BTAA/p/N7/xhgpyb/fQb21JbpmA/mVEUAE8D3FGV+XJN3HM+DUdnswpxNPRc7fBRxeCuLkQGiJA08/yy0KYBDLJbtmpuB41uOx5h8CiR5P/I09BKbAthpsWzXTAW+m/jtYaTNk2QaZoNUTrApgE3AqMXyXfNOOmf16rqCuw0bO8XmO3oXsAR5/A0iHUJzMBuzrwrXA6tbjlciYxzJwa1TkXmF20uyy1sGgXORUbvknLmqfAUkW/nJCR/f0OS92MC20il7IsMLyKjbfGAI+EvJ9RdNA/kqaEUnQi+DU7ucybIOOBP4sUMbiuBdieN1qNs+by3BltTYFMAU4DVIQ2k+8GpFnr3ApZhN5PCV2cDLW473IN3DqnxBTB07Hlm4oRq1ewSZc5fkREXeKrQBmun8RB1LNPlM1xWURpGK7Ae+jgzcXItM90pyGvAT5Bu6tW7dBIyqcFzi+ClNvpm2DUlLUZ+BhyCOnWuY/2rglcgs3KnINPAqkxT7M5p8RwLrFb/PBd5L+jkEI8BDOB50GkAevUU/Vqv0CkgOEF2myXeVwp4zyP9JnPkTs4hXwE3A2woop8ockzg+WJMvuWsJiABUv6fhrKwn5hXASchjPHTmIiuBQN7z12ryjSt++wWdIezSMEaOr6i8bYDrCiijDvQjTvgP0vWtWx+wW/HbJuD1SD9B2ns5jrQpVJ+dRuRx3iDyDR+Z5GU9/l03QvrE/lQ6eV4BZ1OvgZ0y2OragCR5BDCnMCvCYBRZG+EVeQRwVGFWhMHjyBxJr8gjgLgQMh1/cG2AijwC2FOYFWHwK9cGqMgjgM2FWVF/xpBFpd6RRwC/LcyK+rMW+LdrI1TkEcAWYENRhtScH7o2QEferuDbMpzzZyRARDMOT90ZpvqznrT0IytiTEasVtMZ/eNsip0c6mo0sFv6ooFNleZkZP8d3Q14ms4ZM63oFlbWQQA76d097JQihoMfQ6Z5vaj4t18jO2Gs1Jw7RL2XkH0NGSAKgjNpDwOzAn3QpdOBWzCPxVfFJ8DGLtdfW6YjE0TuRz3SeA7y5WDrpvsigFH00c6CpJ9s4V+rKoAvpbo7DiljMkcf8jo4t4S6fGAN8BXXRphSxkKFzxGO8zcgS8FVU7+8xLYAjkIiZofAFqSNs8u1IWmwLYCrkaljdWcjMqdvm2tD0mJbABdYLt8H/ois/P2na0OyYFMAByCLQ+vMeiRSyLBrQ7JiUwBHkH/Bg8+sQ9YDqHr6GsCHkRVDQyXa5BXHUk6Pm4t+gCdoXxKe5CMtefcBlxjY5QSbT4Bt1DNI1F5kIeeOLnne3PL/U4C78VQENgXwAjITNg1jSI/hbGTR6SeLNqoAFiKh7LuxjHbxey0Cm9yI+WN1N+rt1XTBmF28AtZg3q65hM5QuV6/DmwwA3Fsrxs7hnrPngayl68PAhhBnkxpiCJAVsr2urlLFOcNIkPGvjQCF6W56BaiCICl6G/sOPLF0MoppN9ixqYARpDoHlkJXgR9wFdRz/9LRtmeRvcNo10IYFnqK+4keBGATA9bRfuNWJrIcynZnG9TAJkjcCTwTgRlB3d4FPmGPhTpRZuF7MXXSp5Vx2M5ztWxFfh9QWXdu/+/dzN575ufiNuA3xRUjzGuonvsRKKKqXguR7lP5zhXxwrkL7UodCL4IA4E4GPkykdynGsj9vBDFsq8F9kBrbWzqHTn+8pUOreVNUmjmMUsSNMGGMXubh9DyB4D3m4o4YprSC8A03170whgYyFXE0lNH7KUzNRRG1Bv86oijQBWFXI1HuNriLdxJPrlrbRvzqRiGHlimDYeNyOx+Uzwck1/JBKJRCIF4NOcvZci26sNITuMJffodck4suPXw8iEFS/DvVSZWWQfACo7DePp/j9VZQCZYuXasWnSLtR7IEUycAXuHZolqSaxVA4fxgIWuDYgI8nt4iqJDwI43LUBGamq3W34IAAbQ7hl8KRrA4rABwGscG1ARpa7NqAIfOkHWIpsm1IVhoELkfB4kUgkEolUEV/aAIuQDaSrwrPI+n/vtoCpIhfivlcvS1po42aUjQ+fgRe5NiAjmffr9QkfBODdluqG5Fkr6A0+CKCqAZZqMSfABwE84NqAjKxxbUBdGEDm37tu1KVJO4DDbNyMUDkOibzl2rEmaRh4o53bUD6+9AOABJa8CpluNRO/bAN4Btn98w5q8v6PRCKRSND49p7VMQ/4dIn13YNsbhnxhJl0xtaxmeaVc1mRNNxFOc7/HdV5MgbFdGTfYZvO307v5egRhxyO7Elow/nrgRPKuxQ/qOqj7ixkGPkE8u1JtA8JA7caeBARQlD8H/G/zEZlHSWfAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>Design & Development</h3>
                            <p>Bringing your ideas to life with
                                innovative, robust engineering
                                concepts.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_81" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_81)" />
                                </mask>
                                <g mask="url(#mask0_414_81)">
                                    <circle cx="31" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_81" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_81" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_81" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>Production Documents</h3>
                            <p>Complete documentation sets
                                to streamline manufacturing
                                and assembly processes.</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="p-3 border rounded-5 h-100 card-hover-border">
                        <div class="pb-4">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle cx="32" cy="32" r="32" fill="#1E2A5E" />
                                <mask id="mask0_414_85" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="13" y="13"
                                    width="37" height="37">
                                    <rect x="13" y="13" width="37" height="37" fill="url(#pattern0_414_85)" />
                                </mask>
                                <g mask="url(#mask0_414_85)">
                                    <circle cx="32" cy="32" r="32" fill="white" />
                                </g>
                                <defs>
                                    <pattern id="pattern0_414_85" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_414_85" transform="scale(0.0078125)" />
                                    </pattern>
                                    <image id="image0_414_85" width="128" height="128" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </div>
                        <div class="">
                            <h3>CAD Conversion</h3>
                            <p>Converting engineering data
                                and models across various
                                platforms for seamless
                                integration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- wireframe design -->
    <section class="py-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 align-items-center justify-content-center">
                <div class="col">
                    <div class="pb-lg-0 pb-5">
                        <img src="assets/services/desgin-modal.png" class=" img-fluid" alt="desgin-modal">
                    </div>
                </div>
                <div class="col">
                    <div class="text-lg-start text-center">
                        <h2 class="text-blue fw-bold">CAD Documentation & Standardization
                        </h2>
                        <p>At iCubeSteel, We offer complete mechanical engineering solutions, tailored
                            to support your project from initial concept through to production. Our experienced team
                            utilizes the latest engineering tools and technology to deliver accurate, efficient, and
                            cost effective results.</p>
                        <p>Our end-to-end services are designed to ensure accuracy, speed, and full compliance with
                            project specifications enabling your success from concept to production</p>
                        <p>Flexible engineering support tailored to your unique project needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card-shape -->
    <section class="py-5">
        <div class="container">
            <div class="row  justify-content-center row-cols-md-3 row-cols-1">
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">CAD Conversion from one
                            platform to another platform</h6>
                        
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">Create model from pdf or old
                            drawing to complete 3D model,</h6>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">Cad standardization according
                            to clients needs.</h6>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">CAD Drafting Service</h6>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">Create 3D model from ifsc or
                            iges file and providing
                            production documents.</h6>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">Engineering Changes.</h6>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">2d to 3d modeling</h6>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="px-3 h-100 border bg-card-green rounded-3 text-center">
                        <h6 class="py-lg-5 fs-4">Design for Manufacturing
                            (DFM) Services</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

<?php include 'footer.php'; ?>