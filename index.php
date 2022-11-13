<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Demo">
    
    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="" />

    <!-- TITLE -->
    <title>HungerFree</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="./admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="./admin/css/style.css" rel="stylesheet" />
    <link href="./admin/css/dark-style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="./admin/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="./admin/colors/color1.css" />
<style>

:root {
    --primary-bg-color: #0a8bfe;
    --primary-bg-hover: #0d89f5;
    --primary-bg-border: #0a8bfe;
    --transparent-primary: #0a8bfe;
    --transparent-body: #0a8bfe;
    }
    </style>
</head>

<body class="app ltr landing-page horizontal">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="./admin/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="hor-header header">
                <div class="container main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.php">
                            <img src="./Assets/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="./Assets/images/logo.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                                    <!-- SEARCH -->
                                    <div class="header-nav-right p-5">
                                        <a href="reg.php" class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto"
                                            target="">New User
                                        </a>
                                        <a href="login.php" class="btn ripple btn-min w-sm btn-primary me-2 my-auto"
                                            target="">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <div class="landing-top-header overflow-hidden">
                <div class="top sticky overflow-hidden">
                    <!--APP-SIDEBAR-->
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <div class="app-sidebar bg-transparent horizontal-main">
                        <div class="container">
                            <div class="row">
                                <div class="main-sidemenu navbar px-0">
                                    <a class="navbar-brand ps-0 d-none d-lg-block" href="index.php">
                                        <img alt="" class="logo-2" src="./Assets/images/logo.png">
                                        <img src="./Assets/images/min-logo.png" class="logo-3" alt="logo">
                                    </a>
                                    <ul class="side-menu">
                                        <li class="slide">
                                            <a class="side-menu__item active" data-bs-toggle="slide" href="#home"><span
                                                    class="side-menu__label">Home</span></a>
                                        </li>
                                        
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#About"><span
                                                    class="side-menu__label">About</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Faqs"><span
                                                    class="side-menu__label">Faq's</span></a>
                                        </li>
                                        
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Clients"><span
                                                    class="side-menu__label">Testimonials</span></a>
                                        </li>
                                        <li class="slide">
                                            <a class="side-menu__item" data-bs-toggle="slide" href="#Contact"><span
                                                    class="side-menu__label">Contact</span></a>
                                        </li>
                                    </ul>
                                    <div class="header-nav-right d-none d-lg-flex">
                                        <a href="reg.php"
                                            class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                            target="">New User
                                        </a>
                                        <a href="login.php" class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block"
                                            target="">Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/APP-SIDEBAR-->
                </div>
                <div class="demo-screen-headline main-demo main-demo-1 spacing-top overflow-hidden reveal" id="home">
                    <div class="container px-sm-0">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 mb-5 pb-5 animation-zidex pos-relative">
                                <h4 class="fw-semibold mt-7">Save and Donate Food</h4>
                                <h1 class="text-start fw-bold">We are here to Help you in saving/donating food </h1>
                                <h6 class="pb-3">
                                HungerFree - We strives to help others who are in need of food and we are here to create a revolution to save food and share your food
                                , who is needy</h6>

                                <a href=""
                                    target="_blank" class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                                        class="fe fe-play me-2"></i> Get Started
                                </a>
                                <a href=""
                                    class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2" target="_blank"><i
                                        class="fe fe-eye me-2"></i>Discover More
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 my-auto">
                                <img src="./admin/images/landing/market4.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container">
                        <div class="">

                            <!-- ROW-1 OPEN -->
                            <div class="section pb-0">
                                <div class="container">
                                    <div class="row">
                                        <h4 class="text-center fw-semibold">Statistics</h4>
                                        <span class="landing-title"></span>
                                        <h2 class="text-center fw-semibold mb-7">Donation Statistics.</h2>
                                    </div>
                                    <div class="row text-center services-statistics landing-statistics">
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body bg-primary-transparent">
                                                    <div class="counter-status">
                                                        <div
                                                            class="counter-icon bg-primary-transparent box-shadow-primary">
                                                            <i class="fe fe-layers text-primary fs-23"></i>
                                                        </div>
                                                        <div class="test-body text-center">
                                                            <h1 class=" mb-0">
                                                                <span class="counter fw-semibold counter ">100</span>+
                                                            </h1>
                                                            <div class="counter-text">
                                                                <h5 class="font-weight-normal mb-0 ">Donars</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body bg-secondary-transparent">
                                                    <div class="counter-status">
                                                        <div
                                                            class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                            <i class="fe fe-wind text-secondary fs-23"></i>
                                                        </div>
                                                        <div class="text-body text-center">
                                                            <h1 class=" mb-0">
                                                                <span class="counter fw-semibold counter ">60</span>+
                                                            </h1>
                                                            <div class="counter-text">Acceptors
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body bg-success-transparent">
                                                    <div class="counter-status">
                                                        <div
                                                            class="counter-icon bg-success-transparent box-shadow-success">
                                                            <i class="fe fe-file-text text-success fs-23"></i>
                                                        </div>
                                                        <div class="text-body text-center">
                                                            <h1 class=" mb-0">
                                                                <span class="counter fw-semibold counter ">150</span>+
                                                            </h1>
                                                            <div class="counter-text">
                                                                <h5 class="font-weight-normal mb-0 ">Volunteers</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body bg-danger-transparent">
                                                    <div class="counter-status">
                                                        <div
                                                            class="counter-icon bg-danger-transparent box-shadow-danger">
                                                            <i class="fe fe-grid text-danger fs-23"></i>
                                                        </div>
                                                        <div class="text-body text-center">
                                                            <h1 class=" mb-0">
                                                                <span class="counter fw-semibold counter ">300</span>+
                                                            </h1>
                                                            <div class="counter-text">
                                                                <h5 class="font-weight-normal mb-0 ">Donations made
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 CLOSED -->

                            <!-- ROW-2 OPEN -->
                            <div class="sptb section bg-white" id="Features">
                                <div class="container">
                                    <div class="row">
                                        <h4 class="text-center fw-semibold">Features</h4>
                                        <span class="landing-title"></span>
                                        <h2 class="fw-semibold text-center">What We Do</h2>
                                        <p class="text-default mb-5 text-center">HungerFree Platform is a starter to those who want to donate food to those who are needy, those who need a secure platform to fulfill their donations</p>
                                        <div class="row mt-7">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="card features main-features main-features-1 wow fadeInUp reveal revealleft"
                                                    data-wow-delay="0.1s">
                                                    <div class="bg-img mb-2 text-left">
                                                        <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 128 128">
                                                            <circle cx="64" cy="64" r="64" fill="#42A3DB" />
                                                            <path fill="#347CBE"
                                                                d="M85.5 26.6L66.1 61 33.3 98.6 62.6 128H64c33.7 0 61.3-26 63.8-59.1L85.5 26.6z" />
                                                            <path fill="#CD2F30"
                                                                d="M73.1 57.7h-16c3.6 18.7 11.1 36.6 22.1 52.5.3-5 1-9.8 1.8-14.5 4.6 1.3 9.2 2.3 13.7 3-9.7-12.2-17-26.1-21.6-41z" />
                                                            <path fill="#F04D45"
                                                                d="M54.9 57.7c-4.6 15-11.9 28.9-21.6 40.9 4.5-.7 9.1-1.7 13.7-3 .9 4.7 1.5 9.5 1.8 14.5 11-15.9 18.4-33.8 22.1-52.5h-16z" />
                                                            <path fill="#FFF"
                                                                d="M93.5 52c1.8-1.8 1.8-4.7 0-6.5-1.3-1.3-1.7-3.3-1-5 1-2.4-.1-5-2.5-6-1.7-.7-2.8-2.4-2.8-4.3 0-2.5-2.1-4.6-4.6-4.6-1.9 0-3.5-1.1-4.3-2.8-1-2.4-3.7-3.5-6-2.5-1.7.7-3.7.3-5-1-1.8-1.8-4.7-1.8-6.5 0-1.3 1.3-3.3 1.7-5 1-2.4-1-5 .1-6 2.5-.7 1.7-2.4 2.8-4.3 2.8-2.5 0-4.6 2.1-4.6 4.6 0 1.9-1.1 3.5-2.8 4.3-2.4 1-3.5 3.7-2.5 6 .7 1.7.3 3.7-1 5-1.8 1.8-1.8 4.7 0 6.5 1.3 1.3 1.7 3.3 1 5-1 2.4.1 5 2.5 6 1.7.7 2.8 2.4 2.8 4.3 0 2.5 2.1 4.6 4.6 4.6 1.9 0 3.5 1.1 4.3 2.8 1 2.4 3.7 3.5 6 2.5 1.7-.7 3.7-.3 5 1 1.8 1.8 4.7 1.8 6.5 0 1.3-1.3 3.3-1.7 5-1 2.4 1 5-.1 6-2.5.7-1.7 2.4-2.8 4.3-2.8 2.5 0 4.6-2.1 4.6-4.6 0-1.9 1.1-3.5 2.8-4.3 2.4-1 3.5-3.7 2.5-6-.7-1.7-.3-3.7 1-5z" />
                                                            <path fill="#FFCD0A"
                                                                d="M64 70.8c-12.2 0-22.1-9.9-22.1-22.1 0-12.2 9.9-22.1 22.1-22.1 12.2 0 22.1 9.9 22.1 22.1 0 12.2-9.9 22.1-22.1 22.1z" />
                                                            <path fill="#FFF"
                                                                d="M59.9 61c-.6 0-1.1-.2-1.5-.7l-8.3-9.2c-.7-.8-.7-2.1.1-2.8.8-.7 2.1-.7 2.8.1l6.7 7.5 15.1-18.8c.7-.9 2-1 2.8-.3.9.7 1 2 .3 2.8L61.4 60.2c-.3.5-.9.8-1.5.8z" />
                                                        </svg>
                                                    </div>
                                                    <div class="text-left">
                                                        <h4 class="fw-bold">Simple</h4>
                                                        <p class="mb-0">The Plaform is Easier to Use and improved User Experience</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="card  features main-features main-features-2 wow fadeInUp reveal revealleft"
                                                    data-wow-delay="0.1s">
                                                    <div class="bg-img mb-2 text-left">
                                                        <!-- <img src="./admin/landing/images/features/demo.png" alt=""> -->
                                                        <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 128 128">
                                                            <circle cx="64" cy="64" r="64" fill="#FFCD0A" />
                                                            <path fill="#F6AF1A"
                                                                d="M127.7 57.7l-26.4-26.4-74.7 58.8L64.5 128c35.1-.3 63.5-28.8 63.5-64 0-2.1-.1-4.2-.3-6.3z" />
                                                            <path fill="#CFD5DF" d="M76.2 102.9H51.8l2-13.6h20.4z" />
                                                            <path fill="#545E70"
                                                                d="M97.1 91.7H30.9c-3.5 0-6.4-2.9-6.4-6.4V36.1c0-3.5 2.9-6.4 6.4-6.4h66.2c3.5 0 6.4 2.9 6.4 6.4v49.3c0 3.5-2.9 6.3-6.4 6.3z" />
                                                            <path fill="#E6E8EB"
                                                                d="M24.5 81.4v4c0 3.5 2.9 6.4 6.4 6.4h66.2c3.5 0 6.4-2.9 6.4-6.4v-4h-79z" />
                                                            <path fill="#49C7EF"
                                                                d="M30.9 74.3c-1 0-1.8-.8-1.8-1.8V36.1c0-1 .8-1.8 1.8-1.8h66.2c1 0 1.8.8 1.8 1.8v36.4c0 1-.8 1.8-1.8 1.8H30.9z" />
                                                            <path fill="#17B6EA" d="M37.8 34.3h52.5v40H37.8z" />
                                                            <path fill="#E6E8EB"
                                                                d="M76.7 105.3H51.3c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4h25.4c1.3 0 2.4 1.1 2.4 2.4-.1 1.3-1.1 2.4-2.4 2.4z" />
                                                            <path fill="#ACB2B9" d="M53.2 91.7l22.7 8.8-1.3-8.8z" />
                                                            <path fill="#FFF"
                                                                d="M75.7 47.8H52.3c-.6 0-1.1-.5-1.1-1.1v-2.9c0-.6.5-1.1 1.1-1.1h23.3c.6 0 1.1.5 1.1 1.1v2.9c0 .6-.4 1.1-1 1.1zM75.7 57.1H52.3c-.6 0-1.1-.5-1.1-1.1v-2.9c0-.6.5-1.1 1.1-1.1h23.3c.6 0 1.1.5 1.1 1.1V56c0 .6-.4 1.1-1 1.1z" />
                                                            <path fill="#FFCD0A"
                                                                d="M62.8 65.9H52.3c-.6 0-1.1-.5-1.1-1.1v-2.9c0-.6.5-1.1 1.1-1.1h10.4c.6 0 1.1.5 1.1 1.1v2.9c0 .6-.4 1.1-1 1.1z" />
                                                            <g fill="#CFD5DF">
                                                                <circle cx="54.1" cy="45.3" r="1.2" />
                                                                <circle cx="57.6" cy="45.3" r="1.2" />
                                                                <circle cx="61" cy="45.3" r="1.2" />
                                                                <circle cx="64.5" cy="45.3" r="1.2" />
                                                                <circle cx="67.9" cy="45.3" r="1.2" />
                                                            </g>
                                                            <g fill="#CFD5DF">
                                                                <circle cx="54.1" cy="54.6" r="1.2" />
                                                                <circle cx="57.6" cy="54.6" r="1.2" />
                                                                <circle cx="61" cy="54.6" r="1.2" />
                                                                <circle cx="64.5" cy="54.6" r="1.2" />
                                                                <circle cx="67.9" cy="54.6" r="1.2" />
                                                            </g>
                                                            <g fill="#FFF">
                                                                <path
                                                                    d="M56.9 64.4c-.3.3-.6.4-1 .4s-.8-.1-1-.4c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.8.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1zm-.2-1c0-.2-.1-.5-.2-.6-.2-.2-.4-.3-.6-.3s-.4.1-.6.3c-.2.2-.2.4-.2.6 0 .2.1.5.2.6.2.2.4.3.6.3s.4-.1.6-.3c.1-.2.2-.4.2-.6zM58.3 62h.6v1.1l1-1.1h.8l-1.1 1.2c.1.1.3.4.5.7s.4.6.6.8H60l-.8-1.1-.3.4v.8h-.6V62z" />
                                                            </g>
                                                            <circle cx="64" cy="86.6" r="2.8" fill="#545E70" />
                                                            <g fill="#E6E8EB">
                                                                <path
                                                                    d="M92.6 49.7v9.2c0 1.2 1.6 1.6 2.2.5l2.3-4.6c.2-.3.2-.7 0-1l-2.3-4.6c-.6-1.1-2.2-.7-2.2.5zM36.1 58.9v-9.2c0-1.2-1.6-1.6-2.2-.5l-2.3 4.6c-.2.3-.2.7 0 1l2.3 4.6c.6 1.1 2.2.7 2.2-.5z" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-left">
                                                        <h4 class="fw-bold">Quality of Food</h4>
                                                        <p class="mb-0">
                                                           We Accept Donations Through NGO Volunteer Pickups, and we only support food donations
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="card features main-features main-features-11 wow fadeInUp reveal revealleft"
                                                    data-wow-delay="0.1s">
                                                    <div class="bg-img mb-2 text-left">
                                                        <svg id="SvgjsSvg1001" width="50" height="50"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs">
                                                            <defs id="SvgjsDefs1002"></defs>
                                                            <g id="SvgjsG1008"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 128 128" width="50" height="50">
                                                                    <circle cx="64" cy="64" r="64" fill="#bed530"
                                                                        class="colorBED530 svgShape"></circle>
                                                                    <path fill="#acc437"
                                                                        d="M112.8 53.7l-4.6-3.7L85 27l-.9 6.9H77L70 27l-1.3 3.7-6 5.7-9.4-9.4-.9 3.7-8.9 2.3-6-6-5 8.2-3.9 63.7 28.9 28.8c2.2.2 4.4.3 6.6.3 33.7 0 61.4-26.2 63.8-59.3l-15.1-15z"
                                                                        class="colorACC437 svgShape"></path>
                                                                    <path fill="#ffffff"
                                                                        d="M86.5 101.8H34.2c-3.6 0-6.5-2.9-6.5-6.5v-58c0-3.6 2.9-6.5 6.5-6.5h52.3c3.6 0 6.5 2.9 6.5 6.5v58c0 3.6-2.9 6.5-6.5 6.5z"
                                                                        class="colorFFF svgShape"></path>
                                                                    <path fill="#e6e8eb"
                                                                        d="M75.6 78l-9.5 12.3 11.5 11.5h8.8c3.6 0 6.5-2.9 6.5-6.5V67.7L75.6 78z"
                                                                        class="colorE6E8EB svgShape"></path>
                                                                    <path fill="#e2247e" d="M88.5 58.8h8v31.9h-8z"
                                                                        transform="rotate(-135.032 92.483 74.797)"
                                                                        class="colorE2247E svgShape"></path>
                                                                    <path fill="#ee3e88" d="M82.9 53.2h8v31.9h-8z"
                                                                        transform="rotate(-135.032 86.846 69.166)"
                                                                        class="colorEE3E88 svgShape"></path>
                                                                    <path fill="#f06197" d="M77.2 47.6h8v31.9h-8z"
                                                                        transform="rotate(-135.032 81.209 63.535)"
                                                                        class="colorF06197 svgShape"></path>
                                                                    <path fill="#cfd5df" d="M87 56h23.9v2.2H87z"
                                                                        transform="rotate(-135.032 98.922 57.076)"
                                                                        class="colorCFD5DF svgShape"></path>
                                                                    <path fill="#545e70"
                                                                        d="M102.2 43.2l10.5 10.5c1.8 1.8 1.8 4.6 0 6.4l-4.6 4.6-16.8-16.9 4.6-4.6c1.7-1.7 4.6-1.7 6.3 0z"
                                                                        class="color545E70 svgShape"></path>
                                                                    <path fill="#fcd65e"
                                                                        d="M67.1 72l-1.7 16.7c-.1 1.1.8 2 1.9 1.9L84 88.9 67.1 72z"
                                                                        class="colorFCD65E svgShape"></path>
                                                                    <path fill="#f6af1a"
                                                                        d="M65.4 88.7c-.1.6.2 1.1.5 1.5l9.6-9.6-8.4-8.6-1.7 16.7z"
                                                                        class="colorF6AF1A svgShape"></path>
                                                                    <path fill="#ffcd0a"
                                                                        d="M66.1 90.3l12.2-7-5.6-5.6-7 12.2c.2.1.3.3.4.4z"
                                                                        class="colorFFCD0A svgShape"></path>
                                                                    <path fill="#7d6c7c"
                                                                        d="M65.9 83.9l-.5 4.8c-.1 1.1.8 2 1.9 1.9l4.8-.5-6.2-6.2z"
                                                                        class="color7D6C7C svgShape"></path>
                                                                    <path fill="#5b4b57"
                                                                        d="M65.9 83.9l-.5 4.8c-.1.6.2 1.1.5 1.5l3.1-3.1-3.1-3.2z"
                                                                        class="color5B4B57 svgShape"></path>
                                                                    <path fill="#6b5969"
                                                                        d="M68 86l-2.2 3.9c.1.2.2.3.4.4l3.9-2.3-2.1-2z"
                                                                        class="color6B5969 svgShape"></path>
                                                                    <circle cx="84.1" cy="39.6" r="4.1" fill="#bed530"
                                                                        class="colorBED530 svgShape"></circle>
                                                                    <circle cx="68.2" cy="39.6" r="4.1" fill="#bed530"
                                                                        class="colorBED530 svgShape"></circle>
                                                                    <circle cx="52.4" cy="39.6" r="4.1" fill="#bed530"
                                                                        class="colorBED530 svgShape"></circle>
                                                                    <circle cx="36.5" cy="39.6" r="4.1" fill="#bed530"
                                                                        class="colorBED530 svgShape"></circle>
                                                                    <path fill="#545e70"
                                                                        d="M84.1 40.5c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c.1 1.1-.8 1.9-1.9 1.9zM68.3 40.5c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c0 1.1-.9 1.9-1.9 1.9zM52.4 40.6c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c0 1-.9 1.9-1.9 1.9zM36.5 40.6c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c0 1-.8 1.9-1.9 1.9z"
                                                                        class="color545E70 svgShape"></path>
                                                                </svg></g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-left">
                                                        <h4 class="fw-bold">NGO Support</h4>
                                                        <p class="mb-0">
                                                            We are Bulding an NGO network, where the donar can identify the Correct NGOs
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="card features main-features main-features-10 wow fadeInUp reveal revealleft"
                                                    data-wow-delay="0.1s">
                                                    <div class="bg-img mb-2 text-left">
                                                        <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs">
                                                            <defs id="SvgjsDefs1055"></defs>
                                                            <g id="SvgjsG1056"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 128 128" width="50" height="50">
                                                                    <circle cx="64" cy="64" r="64" fill="#58e1ef"
                                                                        class="colorD9B9A9 svgShape"></circle>
                                                                    <path fill="#47d4e4"
                                                                        d="M71.4 127.6c29.4-3.4 52.7-26.7 56.1-56.1L74.8 18.6 51.9 31.2 31.2 47.4 18.6 74.8l52.8 52.8z"
                                                                        class="colorD6AB9A svgShape"></path>
                                                                    <path fill="#6b5969"
                                                                        d="M64 101.5c-20.7 0-37.5-16.8-37.5-37.5S43.3 26.5 64 26.5s37.5 16.8 37.5 37.5-16.8 37.5-37.5 37.5zm0-70.3c-18.1 0-32.8 14.7-32.8 32.8S45.9 96.8 64 96.8 96.8 82.1 96.8 64 82.1 31.2 64 31.2z"
                                                                        class="color6B5969 svgShape"></path>
                                                                    <circle cx="64" cy="28.8" r="14.8" fill="#ffffff"
                                                                        class="colorFFF svgShape"></circle>
                                                                    <path fill="#8663a7"
                                                                        d="M64 39.1c-5.6 0-10.2-4.6-10.2-10.2S58.4 18.7 64 18.7s10.2 4.6 10.2 10.2S69.6 39.1 64 39.1z"
                                                                        class="color8663A7 svgShape"></path>
                                                                    <circle cx="64" cy="99.2" r="14.8" fill="#ffffff"
                                                                        class="colorFFF svgShape"></circle>
                                                                    <path fill="#3d9c46"
                                                                        d="M64 109.4c-5.6 0-10.2-4.6-10.2-10.2S58.4 89 64 89s10.2 4.6 10.2 10.2-4.6 10.2-10.2 10.2z"
                                                                        class="color3D9C46 svgShape"></path>
                                                                    <circle cx="99.2" cy="64" r="14.8" fill="#ffffff"
                                                                        class="colorFFF svgShape"></circle>
                                                                    <path fill="#ee3e88"
                                                                        d="M99.2 74.2C93.6 74.2 89 69.6 89 64s4.6-10.2 10.2-10.2 10.2 4.6 10.2 10.2-4.6 10.2-10.2 10.2z"
                                                                        class="colorEE3E88 svgShape"></path>
                                                                    <circle cx="28.8" cy="64" r="14.8" fill="#ffffff"
                                                                        class="colorFFF svgShape"></circle>
                                                                    <path fill="#ffcd0a"
                                                                        d="M28.8 74.2c-5.6 0-10.2-4.6-10.2-10.2s4.6-10.2 10.2-10.2S39.1 58.4 39.1 64s-4.6 10.2-10.3 10.2z"
                                                                        class="colorFFCD0A svgShape"></path>
                                                                    <path fill="#ffffff"
                                                                        d="M98.4 61.8v1.9h2.5v1.5h-2.5v2.7h4.4v1.6h-7.4v-1.6h1.2v-2.7h-1.3v-1.5h1.3v-1.9c0-1.2.3-2.1.9-2.6.6-.5 1.4-.8 2.4-.8 1.3 0 2.3.6 2.9 1.7l-1.2 1c-.4-.7-.9-1-1.6-1-.5 0-.9.1-1.2.4s-.4.7-.4 1.3z"
                                                                        class="colorFFF svgShape"></path>
                                                                </svg></g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-left">
                                                        <h4 class="fw-bold">Live Tracking</h4>
                                                        <p class="mb-0">
                                                            Our Platform gives you the complete realtime update from Donation pickup to Donation Accpetance
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-2 CLOSED -->

                            <!-- ROW-3 OPEN -->
                            <div class="section bg-landing pb-0 bg-image-style" id="About">
                                <div class="container">
                                    <div class="row">
                                        <h4 class="text-center fw-semibold">Our Mission</h4>
                                        <span class="landing-title"></span>
                                        <div class="text-center">
                                            <h2 class="text-center fw-semibold">Our mission is to make a Hunger Free World.
                                            </h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card bg-transparent">
                                                <div class="card-body text-dark">
                                                    <div class="statistics-info">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 ps-0">
                                                                <div class="text-center reveal revealleft mb-3">
                                                                    <img src="./admin/images/landing/business-team-working-on-business-plan.png"
                                                                        alt="" class="br-5">
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 pe-0 my-auto">

                                                                <div class="ps-5 reveal revealright">
                                                                    <h2 class="text-start fw-semibold fs-25 mb-6">We are
                                                                        in a mission to make the world free from Hunger.
                                                                    </h2>
                                                                    <div class="d-flex">
                                                                        <span><svg style="width:20px;height:20px"
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="#6c5ffc"
                                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                                            </svg></span>
                                                                        <div class="ms-5 mb-4">
                                                                            <h5 class="fw-bold">Quality Food & Trusted Platform
                                                                            </h5>
                                                                            <p>Our Aim is to create a revolutionize the way of donating by digitalizing and connecting with the Right NGOs, to enable a trusted platform.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <span><svg style="width:20px;height:20px"
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="#6c5ffc"
                                                                                    d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.78L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                                                                            </svg></span>
                                                                        <div class="ms-5 mb-4">
                                                                            <h5 class="fw-bold">Volunteer Pickup</h5>
                                                                            <p>
                                                                                Our NGO team will help you deliver your Donations safely in the right hands to the right person.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-3 CLOSED -->

                        

                           
                     

                            <!-- ROW-7 OPEN -->
                            <div class="section" id="Faqs">
                                <div class="container">
                                    <div class="row">
                                        <h4 class="text-center fw-semibold">FAQ'S ?</h4>
                                        <span class="landing-title"></span>
                                        <h2 class="text-center fw-semibold">We are here to help you</h2>
                                        <div class="row justify-content-center">
                                            <p class="col-xl-9 wow fadeInUp text-center sub-text mb-7"
                                                data-wow-delay="0s">
                                                “There is nothing greater than love invested in helping to feed the impoverished living in hunger.”
                                             <br>― Wayne Chirisa
                                            </p>
                                        </div>
                                        <section class="sptb demo-screen-demo" id="faqs">
                                            <div class="row align-items-center">
                                                <div class="col-md-12 col-lg-6">
                                                    <div class="col-md-12 grid-item  px-0">
                                                        <div
                                                            class="card card-collapsed bg-primary-transparent p-0 reveal">
                                                            <div class="card-header grid-link"
                                                                data-bs-toggle="card-collapse">
                                                                <a href="#"
                                                                    class="card-options-collapse h5 fw-bold card-title mb-0"><span
                                                                        class="me-3 fs-18 fw-bold text-primary">01.</span>Is there any criteria to be a part of HungerFree ?</a>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <p>
                                                                    No. HungerFree helps you to pick up the right path, you can either be a Donar, Volunteer or an NGO
                                                                </p>
                                                                <p class="mt-2 mb-3">
                                                                    <span class="fw-bold">Note: </span>NGO are verified manually to confirm their credibility
                                                                </p>
                                                                <a href="./reg.php"
                                                                    class="btn btn-outline-primary tx-13">Sign Up</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 grid-item  px-0">
                                                        <div
                                                            class="card card-collapsed bg-success-transparent p-0 reveal">
                                                            <div class="card-header grid-link"
                                                                data-bs-toggle="card-collapse">
                                                                <a href="#"
                                                                    class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                                        class="me-3 fs-18 fw-bold text-success">02.</span>What
                                                                    type of donations i can provide ?</a>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                            <p>
                                                                    We only support food donation which will be collected and distributed in a radius based location which helps us to ensure the food quality.
                                                                </p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 grid-item  px-0">
                                                        <div
                                                            class="card card-collapsed bg-secondary-transparent p-0 reveal">
                                                            <div class="card-header grid-link"
                                                                data-bs-toggle="card-collapse">
                                                                <a href="#"
                                                                    class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                                        class="me-3 fs-18 fw-bold text-secondary">03.</span>How can i know the donation transit?</a>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <p>
                                                                    We have a live tracking from donation request to donation completion, the user will get live update through SMS.
                                                                </p>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 grid-item  px-0">
                                                        <div
                                                            class="card card-collapsed bg-warning-transparent p-0 reveal">
                                                            <div class="card-header grid-link"
                                                                data-bs-toggle="card-collapse">
                                                                <a href="#"
                                                                    class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                                                        class="me-3 fs-18 fw-bold text-warning">04.</span>Does the App provide Donation pickup ?</a>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <p>
                                                                    Our NGO network will assign you a volunteer which is nearby to your location and the volunteer will collect your parcel and deliver it to the right person.
                                                                </p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-12 col-lg-6 reveal revealright">
                                                    <img src="./admin/images/landing/frequently-asked-questions.png"
                                                        alt="">
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-7 CLOSED -->

                           

                            <!-- ROW-9 OPEN -->
                            <div class="testimonial-owl-landing section pb-0" id="Clients">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card bg-transparent">
                                                <div class="card-body pt-5">
                                                    <h4 class="text-center fw-semibold text-white-80">Testimonials </h4>
                                                    <span class="landing-title"></span>
                                                    <h2 class="text-center fw-semibold text-white mb-7">What People Are
                                                        Saying About HungerFree.</h2>
                                                    <div class="testimonial-carousel">
                                                        <div class="slide text-center">
                                                            <div class="row">
                                                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                                    <div class="testimonia">
                                                                        <p class="text-white-80">
                                                                            <i
                                                                                class="fa fa-quote-left fs-20 text-white-80"></i>
                                                                                I love HungerFree. I'm always looking for ways to help people and making 
                                                                                a small donation was a perfect way for me to make a difference in someone's life. 
                                                                                It's easy, accessible and can be done from my phone.
                                                                        </p>
                                                                        <h3 class="title">Elizabeth</h3>
                                                                        <span class="post">Donar</span>
                                                                        <div class="rating-stars block my-rating-5 mb-5"
                                                                            data-rating="4"></div>
                                                                        <div class="owl-controls clickable">
                                                                            <div class="owl-pagination">
                                                                                <div class="owl-page active">
                                                                                    <span class=""></span>
                                                                                </div>
                                                                                <div class="owl-page ">
                                                                                    <span class=""></span>
                                                                                </div>
                                                                                <div class="owl-page">
                                                                                    <span class=""></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slide text-center">
                                                            <div class="row">
                                                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                                    <div class="testimonia">
                                                                        <p class="text-white-80"><i
                                                                                class="fa fa-quote-left fs-20"></i> I love the HungerFree app. 
                                                                                I donated food through it without any problems. The interface is easy to use and the app is easy to navigate.
                                                                                 I liked how giving food was as simple as 1-2-3, just click and go!
                                                                        </p>
                                                                        <div class="testimonia-data">
                                                                            <h3 class="title">William</h3>
                                                                            <span class="post">Donar</span>
                                                                            <div class="rating-stars">
                                                                                <div class="rating-stars block my-rating-5 mb-5"
                                                                                    data-rating="5"></div>
                                                                                <div class="owl-controls clickable">
                                                                                    <div class="owl-pagination">
                                                                                        <div class="owl-page ">
                                                                                            <span class=""></span>
                                                                                        </div>
                                                                                        <div class="owl-page active">
                                                                                            <span class=""></span>
                                                                                        </div>
                                                                                        <div class="owl-page">
                                                                                            <span class=""></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slide text-center">
                                                            <div class="row">
                                                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                                    <div class="testimonia">
                                                                        <p class="text-white-80"><i
                                                                                class="fa fa-quote-left fs-20"></i> HungerFree is a great app. 
                                                                                It's very simple to use and is super easy to find local food banks that need food. 
                                                                                I'm able to donate food items from my home which is great!</p>
                                                                        <div class="testimonia-data">
                                                                            <h3 class="title">Anil K</h3>
                                                                            <span class="post">Volunteer</span>
                                                                            <div class="rating-stars">
                                                                                <div class="rating-stars block my-rating-5 mb-5"
                                                                                    data-rating="5"></div>
                                                                                <div class="owl-controls clickable">
                                                                                    <div class="owl-pagination">
                                                                                        <div class="owl-page ">
                                                                                            <span class=""></span>
                                                                                        </div>
                                                                                        <div class="owl-page">
                                                                                            <span class=""></span>
                                                                                        </div>
                                                                                        <div class="owl-page active">
                                                                                            <span class=""></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-9 CLOSED -->

                            <!-- ROW-10 OPEN -->
                            <div class="bg-image-landing section pb-0" id="Contact">
                                <div class="container">
                                    <div class="">
                                        <div class="card card-shadow reveal">
                                            <h4 class="text-center fw-semibold mt-7">Contact</h4>
                                            <span class="landing-title"></span>
                                            <h2 class="text-center fw-semibold mb-0 px-2">Get in Touch with <span
                                                    class="text-primary">US.</span></h2>
                                            <div class="card-body p-5 pb-6 text-dark">
                                                <div class="statistics-info p-4">
                                                    <div class="row justify-content-center">
                                                        
                                                                            
                                                        <div class="col-xl-9">
                                                            <div class="">
                                                                <form class="form-horizontal reveal revealrotate m-t-20"
                                                                    action="index.php">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <input class="form-control" type="text"
                                                                                required="" placeholder="Username*">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <input class="form-control" type="email"
                                                                                required="" placeholder="Email*">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-xs-12">
                                                                            <textarea class="form-control"
                                                                                rows="5">Your Comment*</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <a href="javascript:void(0)"
                                                                            class="btn btn-primary btn-rounded  waves-effect waves-light">Submit</a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-10 CLOSED -->

                            <!-- ROW-11 OPEN -->
                            <div class="">
                                <div class="container">
                                    <div class="testimonial-owl-landing buynow-landing reveal revealrotate">
                                        <div class="row pt-6">
                                            <div class="col-md-12">
                                                <div class="card bg-transparent">
                                                    <div class="card-body pt-5 px-7">
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <h1 class="fw-semibold text-white">Start Donating 
                                                                    with HungerFree.</h1>
                                                                <p class="text-white">We are here to create a revolution to save food and share your food, 
                                                                    who is needy. HungerFree helps all people with the purpose of offering 
                                                                    healthy and nutritious meals, along with being environmentally friendly. 
                                                                    This company is a great humanitarian organization!
                                                                </p>
                                                            </div>
                                                            <div class="col-lg-3 text-end my-auto">
                                                                <a href="./reg.php"
                                                                    target="_blank"
                                                                    class="btn btn-white w-lg pt-2 pb-2"><i
                                                                        class="fe fe-shopping-cart me-2"></i>Sign Up
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-11 CLOSED -->

                        </div>
                    </div>
                    <!-- CONTAINER CLOSED-->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- FOOTER OPEN -->
        <div class="demo-footer">
            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <div class="top-footer">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12 col-md-12 reveal revealleft">
                                        <h6>About</h6>
                                        <p>HungerFree - We strives to help others who are in need of food and we are 
                                            here to create a revolution to save food and share your food , who is needy
                                        </p>
                                        
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-md-4 reveal revealleft">
                                        <h6>Get Started</h6>
                                        <ul class="list-unstyled mb-5 mb-lg-0">
                                            <li><a href="./.php">Home</a></li>
                                            <li><a href="login.php">Sign In</a></li>
                                            <li><a href="reg.php">Sign Up</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-md-4 reveal revealleft">
                                        <h6>Pages</h6>
                                        <ul class="list-unstyled mb-5 mb-lg-0">
                                            <li><a href="#About">About</a></li>
                                            <li><a href="#Features">Services</a></li>
                                            <li><a href="terms.html">Terms and Services</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4 reveal revealleft">
                                        <div class="">
                                            <a href="index.php"><img loading="lazy" alt="" class="logo-2 mb-3"
                                                    src=""></a>
                                            <a href="index.php"><img src=""
                                                    class="logo-3" alt="logo"></a>
                                            <p>Feel Free to contact with us. We are here to help you. Help us to make the world better, free from Hunger</p>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your email"
                                                        aria-label="Example text with button addon"
                                                        aria-describedby="button-addon1">
                                                    <button class="btn btn-primary" type="button"
                                                        id="button-addon2">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-list mt-6">
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fa fa-facebook"></i></button>
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fa fa-youtube"></i></button>
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fa fa-twitter"></i></button>
                                            <button type="button" class="btn btn-icon rounded-pill"><i
                                                    class="fa fa-instagram"></i></button>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <footer class="main-footer px-0 pb-0 text-center">
                                <div class="row ">
                                    <div class="col-md-12 col-sm-12">
                                        Copyright © <span id="year"></span> <a href="javascript:void(0)">HungerFree</a>.
                                        Designed with <span class="fa fa-heart text-danger"></span> by <a
                                            href="javascript:void(0)"> infy </a> All rights reserved.
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="./admin/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="./admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="./admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- COUNTERS JS-->
    <script src="./admin/plugins/counters/counterup.min.js"></script>
    <script src="./admin/plugins/counters/waypoints.min.js"></script>
    <script src="./admin/plugins/counters/counters-1.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="./admin/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="./admin/plugins/company-slider/slider.js"></script>

    <!-- Star Rating Js-->
    <script src="./admin/plugins/rating/jquery-rate-picker.js"></script>
    <script src="./admin/plugins/rating/rating-picker.js"></script>

    <!-- Star Rating-1 Js-->
    <script src="./admin/plugins/ratings-2/jquery.star-rating.js"></script>
    <script src="./admin/plugins/ratings-2/star-rating.js"></script>

    <!-- Sticky js -->
    <script src="./admin/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="./admin/js/landing.js"></script>

</body>

</html>