<?php
  session_start();
  require_once './config/config.php';
  require_once './inc/email.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WELCOME TO Speed Express Courier Service</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");

    /* footer style starts here */
    footer .footer-container {
        width: 100%;
        background-color: #0d237d;

    }

    footer .container-fluid {
        display: block;
        width: 100%;
    }

    footer .container-fluid ul {
        display: flex;
        padding: 0;
        margin: 0;

    }

    footer .container-fluid ul li {
        list-style: none;
    }

    footer .container-fluid ul li a {
        display: block;
        width: 100%;
        text-decoration: none;
        font-weight: bold;
        color: #fff;
        padding: 0 10px;
        font-size: 13px;
    }

    footer .container-fluid ul li a:hover {
        text-decoration: underline;
    }

    .dt-copyright {
        font-weight: bold;
        color: #fff;
        padding: 10px 0;
        margin: -90px 0 20px 0px;
        font-size: 13px;
    }

    .container-fluid .email a {
        display: inline-block;
        color: #fff;
        font-weight: bold;
        margin: -20px 0 40px 0;
    }

    #google_translate_element {
        position: fixed;
        top: 80px;
        padding: 5px 10px;
        height: 100px;
        background-color: #ccc;
    }

    footer .container-fluid {
        display: flex;
        width: 100%;
        margin: 0 auto;
    }

    footer .container-fluid .email a {
        transform: translate(-20%, 180%);
    }


    @media only screen and (min-width:1200px) {
        footer .container-fluid {
            width: 1200px;
            margin: 0 auto;
        }
    }

    /* footer styling ends here */
    </style>
    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <h1>STEEL</h1> -->
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar fw-bold" style="background-color: #000;">
                <ul>
                    <li><a href="index" class="active">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="network">Network</a></li>
                    <li><a href="career">Careers</a></li>
                    <li><a href="logistics">Security logistics</a></li>
                    <li class="dropdown"><a href="#"><span>Security Services</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="services">List of Services</a></li>
                            <li><a href="products">Security Product</a></li>
                        </ul>
                    </li>
                    <li><a href="contact">Contact</a></li>
                    <li><a class="get-a-quote" href="get-a-quote">Get a Quote</a></li>
                </ul>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <!-- End Header --
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div id="google_translate_element"></div>
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                        Welcome to Speed Express Courier Services Ltd. A World of Endless Possibilities</p>
                    <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control" id="trkNo" placeholder="Enter Tracking Number">
                        <span class="text-danger d-inline" id="trk_error"></span>
                        <button type="submit" class="btn btn-primary" id="sumbit_trkNo">Track</button>
                    </form>
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Clients</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Support</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Workers</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
        </div>
    </section><!-- End Hero Section -->
    <section class="tracking_response">
        <div id="response_track"></div>
    </section>
    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                        <div>
                            <h4 class="title">SERVICES</h4>
                            <p class="description">Read on for the range of Speed Express Courier Service 's line
                                of services</p>
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Cross Border Management</h4>
                            <p class="description">
                                Cross-border services is just not providing courier services across boundaries. It’s
                                about making use of professional e-commerce
                            </p>
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Integrated Technology Platform</h4>
                            <p class="description">
                                For Speed Express Courier Service Ltd, technology forms the essence of all our
                                service packages. We offer single-window frameworks to all e-commerce websites
                            </p>
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                        <img src="assets/img/tech.png" class="img-fluid" alt="" style="width:100%">
                        <!-- <a href="#" class="glightbox play-btn"></a> -->
                    </div>
                    <div class="col-lg-6 content order-last  order-lg-first">
                        <h3>About Us</h3>
                        <p>
                            Our story began in 1990 as a small courier delivery service and Security company with big
                            ambitions and
                            bigger dreams. Our vision was not just to build a business, but to build enduring and close
                            ties with our
                            customers, while offering them a broad range of services. 25 years later, and over 10,000
                            locations across the globe,
                            Speed Express Courier Service Express Limited has grown from a miniature outfit to a
                            multinational logistics/Security company.
                            As strategic partners of DPD, owned by the international brand GeoPost, our story has
                            reached a new chapter as United Kingdom
                            largest parcel delivery/Security Outfit.
                        </p>
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>We are a team of 50,000 people</h5>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Strategic partner of DPD</h5>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Extensive network in 240 countries</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details" class="stretched-link">Multi-Vendor Management</a></h3>
                            <p>Managing e-tail distribution with multi-vendors can be one of the biggest hurdles to a
                                successful business. It requires all network
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details" class="stretched-link">Last Mile Delivery</a></h3>
                            <p>
                                Our hard work & consistency is not just limited to getting the parcel delivered, but
                                also delivering the happiness & emotional value
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details" class="stretched-link"> Warehousing & E-Fulfilment</a></h3>
                            <p>
                                Speed Express Courier Service Ltd’s ability to assimilate worldwide parcel services
                                with the best technological platforms means the highest level of success.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details" class="stretched-link">Trucking</a></h3>
                            <p>
                                We Work Seamlessly Together To Fulfill Every Need, Big or Small
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/packaging-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details" class="stretched-link">Packaging</a></h3>
                            <p>We Combine Best Quality with Latest Technology To Ensure Customer Satisfaction.
                                It's our Mission to Deliver Smiles Across Miles We are Speed Express Courier
                                Service Ltd Express.x
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/warehousing-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details" class="stretched-link">Warehousing</a></h3>
                            <p>Growing Your E-Commerce Business Through Smart, Swift & Secure Services
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>Call To Action</h3>
                        <p> The biggest strength of Speed Express Courier Service is its unique network &
                            partner-based business model.
                            Our organisation has one of the fastest-growing franchise business networks across the
                            globe. We have developed
                            the largest chain of express courier and security services in United Kingdom and have
                            replicated the same model in
                            various geographies. Today, Speed Express Courier Service has a direct presence in 21
                            countries and a business network
                            in over 240 countries.
                        </p>
                        <a class="cta-btn" href="contact">Contact Us</a>
                        </dic>
                    </div>

                </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                    <div class="col-md-5">
                        <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>We Provide End-to-End Logistics Solutions Making Cross-Border Transactions Smooth.</h3>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Save on shipping</h3>
                        <p class="fst-italic">
                            Create a free account and enjoy discounts on shipping, easy access to saved delivery
                            addresses,
                            quick payments using your stored profile settings and more.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <h3>Take control of your home deliveries</h3>
                        <p>Sign up for Speed Express Delivery Manager® to place holds, give delivery instructions,
                            sign remotely, and more.
                            Stay informed with tracking alerts and notifications.</p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 order-2 order-md-1">
                        <h3>Pause deliveries while you travel</h3>
                        <p class="fst-italic">
                            Got big vacation plans as the weather warms? With STS Delivery Manager®, you can easily
                            schedule a temporary hold of
                            deliveries for up to 14 days while away.
                        </p>
                        <a href="#" class="btn btn-primary">FIND OUT HOW</a>
                    </div>
                </div><!-- Features Item -->

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Pricing</span>
          <h2>Pricing</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>End Pricing Item -->

        <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>End Pricing Item

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>End Pricing Item -->

        <!-- </div>

      </div>
    </section>End Pricing Section  -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="slides-1 swiper" data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>Raj Vardhan </h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Speed Express Courier Service Fulfilment Service for sellers has given me the
                                    edge to upgrade my business. I can now work on my core competency which is to source
                                    goods.
                                    The FC has world class facilities and products go through a series of Quality check.
                                    They nicely pack my items and have a very short processing time, which is delighting
                                    my customers. Thanks.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                                <h3>Sara</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Thank you very much for safe delivery. My daughter is very happy for the gift. Very
                                    good service.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                                <h3>Dharmendra Choudhury</h3>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    I want to compliment to your excellent service as your entire team always went to
                                    great lengths to help me to enhance my business. I have always received quality
                                    service at your FC.
                                    xTeam knows just what to do to solve my issues quickly and always come with
                                    solution-oriented approach. Such service builds great working relationships.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>LOCATIONS</span>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-10">

                        <div class="accordion accordion-flush" id="faqlist">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        North America
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        USA and Canada
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Europe
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Austria</li>
                                            <li>Belgium</li>
                                            <li>Czech Republic</li>
                                            <li>Germany</li>
                                            <li>United Kingdom</li>
                                            <li>Spain</li>
                                            <li>Rusia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Middle East/India
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Bahrain</li>
                                            <li>India</li>
                                            <li>Israel</li>
                                            <li>Bahrain</li>
                                            <li>UAE</li>
                                            <li>Saudi Arabia</li>
                                            <li>Kuwait</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Africa
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        South Africa
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Asia
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Taiwan</li>
                                            <li>Korea</li>
                                            <li>Japan</li>
                                            <li>Philippines</li>
                                            <li>Thailand</li>
                                            <li>China</li>
                                            <li>Hong Kong</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->

    <footer class="w-100">
        <div class="footer-container">
            <div class="container-fluid">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ul-menu">
                    <div class="region region-footer">
                        <section id="block-menu-menu-footer-menu" class="block block-menu clearfix">
                            <ul class="dt-foot-menu" style="margin-top: -40px">
                                <li class="first leaf active-trail active"><a href="about-us"
                                        class="active-trail active">About us</a></li>
                                <li class="leaf"><a href="careers.html">Careers</a></li>
                                <li class="leaf"><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li class="last leaf"><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                            </ul>
                        </section> <!-- /.block -->
                    </div>
                    <div class="clearfix"></div>
                    <p class="dt-copyright">© Copyright Speed Express Courier Service Express Limited. All Rights
                        Reserved</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 email"> <a class="dt-mail-foot"
                        href="mailto:<?=$email?>"><i class="glyphicon glyphicon-envelope"></i><?=$email?></a> </div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <div class="livechat">
        <?php include './inc/livechat.php'?>
    </div>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Tracking JS FILE -->
    <script src="assets/js/traking.js"></script>

    <!-- remove nav background color on scroll -->
    <script>
    window.onscroll = function() {
        removeBackground();
    }

    function removeBackground() {
        var navbar = document.getElementById('navbar');
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            navbar.style.background = "none";

        } else {
            navbar.style.background = "black";
        }
    }

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }
    </script>
    <!-- 
    <script type="text/javascript">

    </script> -->

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>
</body>

</html>