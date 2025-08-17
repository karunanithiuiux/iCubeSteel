<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCubeSteel</title>
    <!-- style css -->
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://db.onlinewebfonts.com/c/0a6ee448d1bd65c56f6cf256a7c6f20a?family=Bahnschrift" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/your-username/your-styles/style.css">

    <!-- map  -->
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>

</head>
<style>
/* Outer trailing ring */
.cursor-outer {
    position: fixed;
    top: 0;
    left: 0;
    width: 40px;
    height: 40px;
    border: 2px solid rgba(0, 71, 178, 0.7);
    border-radius: 50%;
    pointer-events: none;
    transform: translate(-50%, -50%);
    transition: transform 0.15s ease-out, width 0.3s, height 0.3s, border 0.3s;
    z-index: 9998;
}

/* Inner dot */
.cursor-inner {
    position: fixed;
    top: 0;
    left: 0;
    width: 8px;
    height: 8px;
    background: white;
    border-radius: 50%;
    pointer-events: none;
    transform: translate(-50%, -50%);
    z-index: 9999;
    mix-blend-mode: difference;
    /* modern effect */
    transition: transform 0.08s ease-out;
}

/* Hover effect on links/buttons */
a:hover~.cursor-outer,
button:hover~.cursor-outer {
    width: 60px;
    height: 60px;
    border-color: #00f0ff;
}
</style>
</style>

<body>
    <div class="cursor-inner"></div>


    <div class="fixed-top" id="mainHeader">
        <!-- email nav -->
        <div class="bg-body-secondary ">
            <div class=" d-flex justify-content-end me-3 pt-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM19.6 8.25L12.53 12.67C12.21 12.87 11.79 12.87 11.47 12.67L4.4 8.25C4.29973 8.19371 4.21192 8.11766 4.14189 8.02645C4.07186 7.93525 4.02106 7.83078 3.99258 7.71937C3.96409 7.60796 3.9585 7.49194 3.97616 7.37831C3.99381 7.26468 4.03434 7.15581 4.09528 7.0583C4.15623 6.96079 4.23632 6.87666 4.33073 6.811C4.42513 6.74533 4.53187 6.69951 4.6445 6.6763C4.75712 6.65309 4.87328 6.65297 4.98595 6.67595C5.09863 6.69893 5.20546 6.74453 5.3 6.81L12 11L18.7 6.81C18.7945 6.74453 18.9014 6.69893 19.014 6.67595C19.1267 6.65297 19.2429 6.65309 19.3555 6.6763C19.4681 6.69951 19.5749 6.74533 19.6693 6.811C19.7637 6.87666 19.8438 6.96079 19.9047 7.0583C19.9657 7.15581 20.0062 7.26468 20.0238 7.37831C20.0415 7.49194 20.0359 7.60796 20.0074 7.71937C19.9789 7.83078 19.9281 7.93525 19.8581 8.02645C19.7881 8.11766 19.7003 8.19371 19.6 8.25Z"
                        fill="#0d6efd" />
                </svg>

                <p class="ps-1"><a href="mailto:info@icubesteel.com"
                        class=" text-decoration-none">info@icubesteel.com</a></p>
            </div>
        </div>
        <!-- nav -->
        <nav class="navbar navbar-expand-lg bg-body-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/logo.png" width="150" height="100" class=" img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                    aria-controls="staticBackdrop" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-center gap-3">
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active text-primary fw-bold' : '' ?>"
                                aria-current="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'page' : '' ?>"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active text-primary fw-bold' : '' ?>"
                                aria-current="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'page' : '' ?>"
                                href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active text-primary fw-bold' : '' ?>"
                                aria-current="<?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'page' : '' ?>"
                                href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'active text-primary fw-bold' : '' ?>"
                                aria-current="<?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'page' : '' ?>"
                                href="contactus.php">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <div class="offcanvas offcanvas-start d-lg-none" data-bs-backdrop="static" tabindex="-1"
                    id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="staticBackdropLabel">icubesteel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-center gap-3">
                            <li class="nav-item">
                                <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active text-primary fw-bold' : '' ?>"
                                    aria-current="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'page' : '' ?>"
                                    href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active text-primary fw-bold' : '' ?>"
                                    aria-current="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'page' : '' ?>"
                                    href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active text-primary fw-bold' : '' ?>"
                                    aria-current="<?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'page' : '' ?>"
                                    href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'active text-primary fw-bold' : '' ?>"
                                    aria-current="<?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'page' : '' ?>"
                                    href="contactus.php">Contact US</a>
                            </li>
                            <li class="nav-item d-lg-none d-flex">
                                <button type="button" class="btn btn-light rounded-pill px-3 py-1">Get In
                                    Quotes</button>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="d-lg-flex d-none">
                    <!-- <button type="button" class="btn btn-dark rounded-pill px-4 py-2">Get In Quotes</button> -->
                    <!-- <button type="button" class="btn btn-outline-primary">Get In Quotes</button> -->
                    <a href="contactus.php" class="btn btn-outline-primary rounded-2 px-3 py-2">
                        Get In Quotes
                    </a>

                </div>
            </div>
        </nav>
    </div>


    <!-- Sticky Social Media -->
    <div class="social-icons">
        <ul class="list-unstyled d-flex flex-column">
            <li class="mb-3">
                <a href="https://www.facebook.com/icubesteel" target="_blank" class="text-decoration-none text-dark">
                    <i class="bi bi-facebook fs-3 icon-color"></i>
                </a>
            </li>
            <li class="mb-3">
                <a href="https://www.instagram.com/icubesteel/" target="_blank" class="text-decoration-none text-dark">
                    <i class="bi bi-instagram fs-3 icon-color"></i>
                </a>
            </li>
            <li class="mb-3">
                <a href="https://www.linkedin.com/company/icubesteel/" target="_blank"
                    class="text-decoration-none text-dark">
                    <i class="bi bi-linkedin fs-3 icon-color"></i>
                </a>
            </li>
            <li class="mb-3">
                <a href="https://twitter.com/icubesteel" target="_blank" class="text-decoration-none text-dark">
                    <i class="bi bi-skype fs-3 icon-color"></i>
                </a>
            </li>
        </ul>
    </div>


</body>

</html>