<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mosaic - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- for the new template -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/clear.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/carouFredSel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sm-clean.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style_.css') }}">


    <!-- Third template CTA -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style__.css') }}">

</head>

<body>

    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Evaloré Logo" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#story" class="nav-link">Story Behind</a></li>
                    <li class="nav-item"><a href="#collection" class="nav-link">Collection</a></li>
                    <li class="nav-item"><a href="#why-evalore" class="nav-link">Why Evalore</a></li>
                    <li class="nav-item"><a href="#usage-steps" class="nav-link">Ritual</a></li>
                    <li class="nav-item"><a href="#faq" class="nav-link">FAQs</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <section class="home-slider js-fullheight owl-carousel bg-white">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image: url('{{ asset('assets/images/abs-1.jpeg') }}');">
                        <h3 class="vr">Beautiful Experience</h3>
                    </div>
                    <div class="background-overlay one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text ftco-choose">
                            <h1 class="mb-4">The Art of<br>Moroccan Self-Care</h1>
                            <p>Discover a new way to experience the art of Moroccan bathing,<br> thoughtfully brought into your self-care routine.</p>
                            <p><a href="#collection" class="btn btn-white px-4 py-3">Explore Our Collection</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image: url('{{ asset('assets/images/abs-2.jpeg') }}');">
                        <h3 class="vr">Self Care</h3>
                    </div>
                    <div class="background-overlay one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text ftco-choose">
                            <h1 class="mb-4">The Art of<br>Moroccan Self-Care</h1>
                            <p>From the tradition of the Moroccan hammam to a moment of relaxation <br> in your own home, discover a self-care ritual inspired by Moroccan bathing heritage.</p>
                            <p><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3KSWNPF/ref=sr_1_36?th=1" class="btn btn-white px-4 py-3">Shop on Amazon UAE</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img js-fullheight"
                        style="background-image: url('{{ asset('assets/images/abs-3.jpeg') }}');">
                        <h3 class="vr">Beautiful Experience</h3>
                    </div>
                    <div class="background-overlay one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text ftco-choose">
                            <h1 class="mb-4">The Art of<br>Moroccan Self-Care</h1>
                            <p>Discover a new way to experience the art of Moroccan bathing, <br> thoughtfully brought into your self-care routine.</p>
                            <p><a href="#collection" class="btn btn-white px-4 py-3">Rich your Bathroom</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story behind -->
    <section class="ftco-section ftc-no-pb" id="story">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url('{{ asset('assets/images/hero-1.jpeg') }}');">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading subheading-with-line"><small class="pr-2 bg-white">The Story Behind</small></span>
                            <h2 class="mb-4">inspiration from tradition of Moroccan bathing &amp; the simple pleasure of taking time for yourself.</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>At Evalore, we draw inspiration from the timeless tradition of Moroccan bathing and the simple pleasure of taking time for yourself.</p>
                        <p>Our Moroccan bath sets bring together soap, body serum, and a loofah in a convenient collection designed to help you create your own bathing ritual at home.</p>
                        <p>Discover the collection and make self-care a moment to look forward to.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection -->
    <section class="ftco-section ftco-no-pb" id="collection">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-2">
                <div class="col-md-4 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-white">The Collection</small></span>
                    <h2 class="mb-4">Three rituals. One moment for yourself</h2>
                </div>
                <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                    <div class="pl-md-4 border-line">
                        <p>Explore our Moroccan bath collections, each inspired by a distinctive ingredient and presented as a complete self-care set.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3 ftco-animate" style="margin-left: 9px; margin-right: 9px;">
                    <div class="project-1 project">
                        <img src="{{ asset('assets/images/hero-2.jpeg')}}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Blue Nila</span>
                            <p>A Moroccan bath set inspired by Blue Nila, bringing together Moroccan soap, body serum, and a loofah for your at-home bathing ritual.</p>
                            <p>Set includes: Soap + Body Serum + Loofah.</p>
                            <p><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3KSWNPF/ref=sr_1_36?th=1" style="text-decoration: underline;"><strong>Shop</strong>: Amazon UAE.</a></p>

                        </div>
                        <a href="{{ asset('assets/images/hero-2.jpeg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate" style="margin-left: 9px; margin-right: 9px;">

                    <div class="project-2 project ">
                        <img src="{{ asset('assets/images/hero-1_.jpeg')}}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Aker Fassi</span>
                            <p>Inspired by the traditional Moroccan ingredient Aker Fassi, this set combines Moroccan soap, body serum, and a loofah in one collection.</p>
                            <p>Set includes: Soap + Body Serum + Loofah.</p>
                            <p><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L65PCW/ref=sr_1_36" style="text-decoration: underline;"><strong>Shop</strong>: Amazon UAE.</a></p>

                        </div>
                        <a href="{{ asset('assets/images/hero-1_.jpeg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate" style="margin-left: 9px; margin-right: 9px;">
                    <div class="project-3 project">
                        <img src="{{ asset('assets/images/hero-3.jpeg')}}" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Emarati Sidr</span>
                            <p>A Moroccan bath set inspired by Sidr, bringing together soap, body serum, and a loofah for a complete at-home bathing routine.</p>
                            <p>Set includes: Soap + Body Serum + Loofah.</p>
                            <p><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L81TK2/ref=sr_1_36?th=1" style="text-decoration: underline;"><strong>Shop</strong>: Amazon UAE.</a></p>

                        </div>
                        <a href="{{ asset('assets/images/hero-3.jpeg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Evalore and the Formula -->
    <section class="ftco-services" id="why-evalore">
        <div class="container">
            <!-- why Evalore -->
            <div class="row justify-content-start mt-5 py-5">
                <div class="col-md-4 heading-section ftco-animate">
                    <h2 class="mb-4">Why Evalore</h2>
                    <p>A Ritual Worth Making Time For. Bring the experience of Moroccan bathing into your own home with a collection that brings together the essential elements of your bathing routine.</p>
                </div>
                <div class="col-md-8 ftco-animate">
                    <div class="row d-flex">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fa fa-bath"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">Cleansing & Exfoliation</h3>
                                    <p>A bathing ritual designed around cleansing and exfoliation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fa fa-leaf"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">Soft, Nourished Skin</h3>
                                    <p>Soap and body serum come together in one routine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">At-Home Hammam</h3>
                                    <p>Create your own bathing ritual in the comfort of home.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="media block-6 services services-2 d-block bg-light p-4 mb-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="fa fa-gift"></span>
                                </div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">A Thoughtful Gift</h3>
                                    <p>A bath set that can be presented as a gift for someone special.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- the Formoula -->
            <div class="row justify-content-start mb-5 pb-5">
                <div class="container">
                    <div class="row justify-content-start mb-5 pb-2">
                        <div class="col-md-4 heading-section ftco-animate">
                            <span class="subheading subheading-with-line"><small class="pr-2 bg-white">Discover Each Formula</small></span>
                            <h2 class="mb-4">Three rituals. One moment for yourself</h2>
                        </div>
                        <div class="col-md-8 pl-md-5 heading-section ftco-animate">
                            <div class="pl-md-4 border-line">
                                <p>Dive deeper into the stories behind each product you will have and why it's important for your skin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon-nila d-flex justify-content-center align-items-center">
                                <span class="fa fa-tint"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Inspired by Blue Nila</h3>
                                <p>Discover the Blue Nila Moroccan Bath Set, bringing together Moroccan soap, body serum, and an exfoliating loofah in one collection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon-fassi d-flex justify-content-center align-items-center">
                                <span class="fa fa-pagelines"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Inspired by Aker Fassi</h3>
                                <p>Experience the Aker Fassi Moroccan Bath Set, combining soap, body serum, and a loofah for your at-home bathing routine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                        <div class="media block-6 services d-block">
                            <div class="icon-sidr d-flex justify-content-center align-items-center">
                                <span class="fa fa-leaf"></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">Inspired by Emarati Sidr</h3>
                                <p>Explore the Emarati Sidr Moroccan Bath Set, a collection of soap, body serum, and a loofah inspired by Sidr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start a new Section horizontal -->
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('{{ asset('assets/images/bg_1.webp') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-end">
            </div>
        </div>
    </section>

    <!-- Product Usage Steps Section -->
    <section class="ftco-section bg-light" id="usage-steps">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <span class="subheading">Your Beauty Ritual</span>
                    <h2 class="mb-4">How to Use Evalore</h2>
                    <p>
                        Follow these simple steps to enjoy your Moroccan
                        bath ritual and care for your skin.
                    </p>
                </div>
            </div>
        </div>

        <!-- the Steps menu -->
        <div class="menu-wrapper center-relative">
            <nav id="header-main-menu">
                <div class="mob-menu">MENU</div>
                <ul class="main-menu sm sm-clean">
                    <li><a href="#services">First Step</a></li>
                    <li><a href="#portfolio">Second Step</a></li>
                    <li><a href="#about">Third Step</a></li>
                    <li><a href="#news">Forth Step</a></li>
                    <li><a href="#video">Fifth Step</a></li>
                </ul>
            </nav>
        </div>

        <!-- First -->
        <div id="services" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder left">
                    <div class="section-num">
                        <span>01</span>
                    </div>
                </div>

                <div class="section-content-holder right">
                    <!-- Text -->
                    <div class="content-wrapper">
                        <div class="image-slider-wrapper relative team team1">
                            <div class="">
                                <ul id="team1" class="">
                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Prepare Your Skin</h4>
                                            <p class="member-position">Evalore</p>
                                            <div class="member-content">
                                                Wet your skin with water to prepare for your bathing routine.<br>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <br>
                        <br>
                    </div>

                    <!-- images -->
                    <div class="full-width">
                        <script>
                            var aboutImage_speed = "500";
                            var aboutImage_auto = "false";
                            var aboutImage_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative img servicesImage">
                            <a id="servicesImage_next" class="image_slider_next" href="#"></a>
                            <div class="caroufredsel_wrapper">
                                <ul id="servicesImage" class="image-slider slides">
                                    <li><img src="{{ asset('assets/images/about_img_01_.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_02.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_03.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <script>
                            var servicesImage_speed = "500";
                            var servicesImage_auto = "false";
                            var servicesImage_hover = "true";
                        </script>

                    </div> <!-- end full-width div -->

                </div>
                <div class='clear'></div>
            </div>
        </div>

        <!-- Second -->
        <div id="portfolio" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder  right">
                    <div class="section-num">
                        <span>02</span>
                    </div>
                    <h2 class="entry-title"></h2>
                </div>
                <div class="section-content-holder left">

                    <!-- Text -->
                    <div class="content-wrapper">
                        <div class="image-slider-wrapper relative team team1">
                            <div class="">
                                <ul id="team1" class="">
                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Apply the Soap</h4>
                                            <p class="member-position">Evalore</p>
                                            <div class="member-content">
                                                Apply the Moroccan soap to damp skin and massage gently using the provided
                                                exfoliating loofah.<br>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="full-width ">
                        <script>
                            var aboutImage_speed = "500";
                            var aboutImage_auto = "false";
                            var aboutImage_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative img portfolioImage">
                            <a id="portfolioImage_next" class="image_slider_next" href="#"></a>
                            <div class="caroufredsel_wrapper">
                                <ul id="portfolioImage" class="image-slider slides">
                                    <li><img src="{{ asset('assets/images/about_img_02_.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_02.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_03.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <script>
                            var portfolioImage_speed = "500";
                            var portfolioImage_auto = "false";
                            var portfolioImage_hover = "true";
                        </script>

                    </div> <!-- end full-width div -->


                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Third -->
        <div id="about" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder left">
                    <div class="section-num">
                        <span>03</span>
                    </div>
                </div>
                <div class="section-content-holder right">
                    <div class="content-wrapper">
                        <div class="image-slider-wrapper relative team team1">
                            <div class="">
                                <ul id="team1" class="">
                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Let It Rest</h4>
                                            <p class="member-position">Evalore</p>
                                            <div class="member-content">
                                                Leave the soap on your skin for 3–5 minutes.<br>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="full-width ">
                        <script>
                            var aboutImage_speed = "500";
                            var aboutImage_auto = "false";
                            var aboutImage_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative img aboutImage">
                            <a id="aboutImage_next" class="image_slider_next" href="#"></a>
                            <div class="caroufredsel_wrapper">
                                <ul id="aboutImage" class="image-slider slides">
                                    <li><img src="{{ asset('assets/images/about_img_03_.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_02.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_03.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <script>
                            var team1_speed = "500";
                            var team1_auto = "false";
                            var team1_hover = "true";
                        </script>

                    </div> <!-- end full-width div -->

                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Forth -->
        <div id="news" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder right">
                    <div class="section-num">
                        <span>
                            04
                        </span>
                    </div>
                </div>
                <div class="section-content-holder left">
                    <div class="content-wrapper">
                        <div class="image-slider-wrapper relative team team1">
                            <div class="">
                                <ul id="team1" class="">
                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Rinse Thoroughly</h4>
                                            <p class="member-position">Evalore</p>
                                            <div class="member-content">
                                                Rinse your skin thoroughly with water.<br>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <br>
                        <br>
                    </div>

                    <div class="full-width ">
                        <script>
                            var newsImage_speed = "500";
                            var newsImage_auto = "false";
                            var newsImage_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative img newsImage">
                            <a id="newsImage_next" class="image_slider_next" href="#"></a>
                            <div class="caroufredsel_wrapper">
                                <ul id="newsImage" class="image-slider slides">
                                    <li><img src="{{ asset('assets/images/about_img_02.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_02.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_03.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <script>
                            var team1_speed = "500";
                            var team1_auto = "false";
                            var team1_hover = "true";
                        </script>

                    </div> <!-- end full-width div -->

                </div>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Fifth -->
        <div id="video" class="section">
            <div class="block content-1170 center-relative">
                <div class="section-title-holder left">
                    <div class="section-num">
                        <span>
                            05
                        </span>
                    </div>
                </div>
                <div class="section-content-holder right">
                    <div class="content-wrapper">
                        <div class="image-slider-wrapper relative team team1">
                            <div class="">
                                <ul id="team1" class="">
                                    <li>
                                        <div class="member-content-holder">
                                            <h4 class="member-name">Apply the Serum</h4>
                                            <p class="member-position">Evalore</p>
                                            <div class="member-content">
                                                Apply the matching body serum as the final step of your routine.<br>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="full-width ">
                        <script>
                            var videoImage_speed = "500";
                            var videoImage_auto = "false";
                            var videoImage_hover = "true";
                        </script>
                        <div class="image-slider-wrapper relative img videoImage">
                            <a id="videoImage_next" class="image_slider_next" href="#"></a>
                            <div class="caroufredsel_wrapper">
                                <ul id="videoImage" class="image-slider slides">
                                    <li><img src="{{ asset('assets/images/about_img_05_.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_02.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('assets/images/about_img_03.jpg') }}" alt=""></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <script>
                            var team1_speed = "500";
                            var team1_auto = "false";
                            var team1_hover = "true";
                        </script>

                    </div> <!-- end full-width div -->

                </div>
                <div class="clear"></div>
            </div>
        </div>

    </section>
    <!-- End Product Usage Steps Section -->

    <!-- Recommended Routine -->
    <div class="recommended-routine">
        <div class="routine-title">
            <span class="fa fa-clock-o"></span>
            <strong>Recommended Routine</strong>
        </div>

        <p>
            For best results, use the set 2–3 times per week,
            following the instructions provided with each product.
        </p>
    </div>

    <!-- Testamonials -->
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading subheading-with-line"><small class="pr-2 bg-light">Customer Reviews</small></span>
                    <h2 class="mb-4">Loved by Our Customers</h2>
                    <p>Discover what customers have shared about their Moroccan bath set experience.</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">“I really enjoyed using this Moroccan bath kit. The soap and oil have a lovely traditional feel, and they leave the skin feeling clean, soft, and refreshed. The products are easy to use and make the bath feel more like a relaxing spa experience at home. Overall, a great kit and good value for the price. Definitely recommend!”</p>
                                    <div class="pl-5">
                                        <p class="name">Amal Alnajjad</p>
                                        <span class="position">Great Moroccan Bath Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">“I absolutely loved this Moroccan soap set! 🤍 The soap leaves the skin feeling so clean, soft, and refreshed, and the exfoliating gloves work really well without being too harsh. The cream is also amazing,it leaves the skin smooth, moisturized, and beautifully soft. ✨ A lovely set for an at-home Moroccan hammam experience. I definitely recommend it! 🌸”</p>
                                    <div class="pl-5">
                                        <p class="name">Rain Bittar</p>
                                        <span class="position">Amazing Morocan soap set</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="pl-5">
                                        <p class="name">Mais</p>
                                        <span class="position">An elegant and premium gift that anyone would love</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">“One of the best Moroccan bath sets I've tried. The Sidr products feel natural, have a fresh scent, and leave my skin clean, soft, and refreshed without drying it out. The packaging is elegant, and the overall quality feels premium. Highly recommended, and I'll definitely buy it again.”</p>
                                    <div class="pl-5">
                                        <p class="name">Garreth Smith</p>
                                        <span class="position">Landscape Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">“So happy with the Moroccan bath set, very easy to use and gives lovely spa like feeling, leaving amazing scent in the skin. Even the packaging was amazing , very nice as gift also.”</p>
                                    <div class="pl-5">
                                        <p class="name">Samah El Safadi</p>
                                        <span class="position">Amazing produc</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5 pl-4 line">“Beautiful packaging and a lovely Moroccan bath experience. The products smell great and left my skin feeling so soft and refreshed. Everything feels high quality, and the set is also perfect for gifting. Highly recommended! ❤️”</p>
                                    <div class="pl-5">
                                        <p class="name">Razan</p>
                                        <span class="position">Luxurious Moroccan Bath Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt" style="margin-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-stretch">
                    <div class="img" style="background-image: url('{{ asset('assets/images/about-1.jpg') }}');"></div>
                </div>
                <div class="col-md-4 py-md-5 ftco-animate">
                    <div class="text py-3 py-md-5">
                        <h2 class="mb-4">What Are You Waiting For?</h2>
                        <p>Make a little time for yourself. Discover the art of Moroccan bathing and turn your everyday routine into a moment of care, comfort, and connection with yourself.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 order-md-last d-flex align-items-stretch">
                    <div class="img img-2" style="background-image: url('{{ asset('assets/images/about-2.jpeg') }}');"></div>
                </div>
                <div class="col-md-7 py-3 py-md-5 ftco-animate">
                    <div class="text text-2 py-md-5">
                        <h2 class="mb-4">Bring It to Your Bath Today</h2>
                        <p>Bring the Moroccan hammam experience into your home with Evaloré. Choose your favorite collection and create a ritual that makes every bath feel a little more special.</p>
                        <p><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L81TK2/ref=sr_1_36?th=1" class="btn btn-white px-4 py-3">Shop now on Amazon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="ftco-section ftco-about img" style="background-image: url('{{ asset('assets/images/background_img_02_.webp') }}' );" id="faq">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="https://vimeo.com/45830194"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Questions -->
    <section class="ftco-section ftco-about ftco-no-pt img" id="faq">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">

                        <!-- FAQ Image -->
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image: url('{{ asset('assets/images/hero-3.jpeg') }}');">
                            </div>
                        </div>

                        <!-- FAQ Content -->
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="heading-section ftco-animate mb-4">
                                <span class="subheading">FAQs</span>
                                <h2 class="mb-4">Frequently Asked Questions</h2>
                                <p>
                                    Everything you need to know about your Evalore skincare routine.
                                </p>
                            </div>

                            <div class="faq-list">

                                <!-- Question 1 -->
                                <div class="faq-item">
                                    <button class="faq-question" type="button"
                                        data-toggle="collapse"
                                        data-target="#faq1"
                                        aria-expanded="true"
                                        aria-controls="faq1">
                                        <span>How do I use the Evalore products?</span>
                                        <span class="faq-icon">−</span>
                                    </button>

                                    <div id="faq1" class="collapse show" data-parent=".faq-list">
                                        <div class="faq-answer">
                                            Follow the recommended steps: prepare your skin, apply the soap,
                                            let it rest for 3–5 minutes, rinse thoroughly, and finish with the serum.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="faq-item">
                                    <button class="faq-question collapsed" type="button"
                                        data-toggle="collapse"
                                        data-target="#faq2"
                                        aria-expanded="false"
                                        aria-controls="faq2">
                                        <span>How long should I leave the soap on my skin?</span>
                                        <span class="faq-icon">+</span>
                                    </button>

                                    <div id="faq2" class="collapse" data-parent=".faq-list">
                                        <div class="faq-answer">
                                            Follow the product label instructions. If your routine specifies
                                            3–5 minutes, do not exceed that recommended duration.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="faq-item">
                                    <button class="faq-question collapsed" type="button"
                                        data-toggle="collapse"
                                        data-target="#faq3"
                                        aria-expanded="false"
                                        aria-controls="faq3">
                                        <span>Should I rinse the soap off before applying the serum?</span>
                                        <span class="faq-icon">+</span>
                                    </button>

                                    <div id="faq3" class="collapse" data-parent=".faq-list">
                                        <div class="faq-answer">
                                            Yes. Rinse thoroughly before applying the matching body serum
                                            as the final step of your routine.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="faq-item">
                                    <button class="faq-question collapsed" type="button"
                                        data-toggle="collapse"
                                        data-target="#faq4"
                                        aria-expanded="false"
                                        aria-controls="faq4">
                                        <span>Can I use the products on sensitive skin?</span>
                                        <span class="faq-icon">+</span>
                                    </button>

                                    <div id="faq4" class="collapse" data-parent=".faq-list">
                                        <div class="faq-answer">
                                            Check the product label for suitability and ingredients.
                                            If you have sensitive skin, test the product on a small area first
                                            and discontinue use if irritation occurs.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Evaloré Logo" class="navbar-logo">
                        </a>
                        <p>Discover the beauty of Moroccan bathing rituals with Evaloré. Explore our collection of Moroccan black soap, body serums, and exfoliating essentials, inspired by traditional care rituals.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#story"><span class="icon-long-arrow-right mr-2"></span>Story Behind</a></li>
                            <li><a href="#collection"><span class="icon-long-arrow-right mr-2"></span>Collection</a></li>
                            <li><a href="#usage-steps"><span class="icon-long-arrow-right mr-2"></span>Ritual</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Collections</h2>
                        <ul class="list-unstyled">
                            <li><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3KSWNPF/ref=sr_1_36?th=1"><span class="icon-long-arrow-right mr-2"></span>Blue Nila</a></li>
                            <li><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L65PCW/ref=sr_1_36"><span class="icon-long-arrow-right mr-2"></span>Aker Fassi</a></li>
                            <li><a href="https://www.amazon.ae/Evalore-Moroccan-Black-Soap-Kit/dp/B0H3L81TK2/ref=sr_1_36?th=1"><span class="icon-long-arrow-right mr-2"></span>Emarati Sidr</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>
                        <p>Stay connected with Evaloré and be the first to discover our latest collections, beauty rituals, and updates.</p>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                                <input type="submit" value="Subscribe" class="form-control submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Evalore <i class="icon-heart" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="{{ asset('assets/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- new template -->
    <!-- <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.sticky-kit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.smartmenus.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.dryMenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3_.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main_.js') }}"></script>


    <!-- for the CTA -->
    <script src="{{ asset('assets/js/main__.js') }}"></script>

    <!-- for the FAQs -->
    <script src="{{ asset('assets/js/main___.js') }}"></script>
</body>

</html>