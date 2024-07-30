@extends('front.inc.app')
@section('content')
    <div class="offcanvas-menu">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
            <input type="text" name="s" id="search" value="" placeholder="Search" />
            <button><i class="fa fa-search"></i></button>
        </form>


        <div id="cssmenu3" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-2" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="services.html">Services</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Team </a></li>

                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery
                        Study</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
            </ul>
        </div>

        <div id="cssmenu2" class="menu-one-page-menu-container">
            <ul id="menu-one-page-menu-1" class="menu">
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12
                            3456897</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom"><a
                        href="#howitwork"><span>info@example.com</span></a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-end -->

    <!-- main-area -->
    <main>

        <!-- search-popup -->
        <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content search-popup">
                    <div class="text-center">
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search"
                                    aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /search-popup -->
        <!-- slider-area -->
        <section id="home" class="slider-area slider-four fix p-relative">

            <div class="slider-active">
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="background: url(img/slider/slider_img_bg.png) no-repeat;background-size: cover; background-position: center top;">
                    <div class="container">
                        <div class="row justify-content-center pt-50">
                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content s-slider-content mt-150">
                                    <h5 data-animation="fadeInDown" data-delay=".4s">Water Is Nothing But Life </h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Mineral Water With Great Taste</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Vivamus mattis ipsum vitae imperdiet
                                        eleifend. Nunc scelerisque feugiat turpis, et tempor tellus porta vitae. Aenean
                                        hendrerit, libero sed viverra auctor, est tortor pulvinar sem, non luctus ante quam
                                        quis urna.</p>

                                    <div class="slider-btn mt-30">
                                        <a href="services.html" class="btn ss-btn mr-15">Read More</a>
                                        <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"
                                            style="animation-delay: 0.8s;"></div>

                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="slider-img" data-animation="fadeInUp" data-delay=".4s">
                                    <img src="img/slider/slider_img05.png" alt="slider_img05">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!-- slider-area-end -->
        <!-- services-area -->
        <section id="services" class="services-area what-story pt-120 pb-90 fix">

            <div class="container">

                <div class="row">
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mb-50 text-center">

                            <h2>
                                What’s Our Story
                            </h2>
                            <span class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></span>
                            <p>Our company was founded in 2008. Water Brand bottle is great for drinking, cooking,
                                activities, and even for children. The product is certified in 50 countries.</p>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <div class="services-box text-center mb-30"
                            style="background: url(img/bg/services-bg-01.png) no-repeat;background-size: contain; background-position: center bottom; background-size: cover;">
                            <div class="services-icon">
                                <img src="img/icon/pv-icon1.png" alt="icon01">
                            </div>
                            <div class="services-content2">
                                <h5><a href="services-detail.html">Quality Check</a></h5>
                                <p>Nulla lacinia odio purus, sed varius eros aucto.</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="services-box text-center mb-30"
                            style="background: url(img/bg/services-bg-01.png) no-repeat;background-size: contain; background-position: center bottom; background-size: cover;">
                            <div class="services-icon">
                                <img src="img/icon/pv-icon2.png" alt="icon01">
                            </div>
                            <div class="services-content2">
                                <h5><a href="services-detail.html">Filtration Level</a></h5>
                                <p>Nulla lacinia odio purus, sed varius eros aucto.</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="services-box text-center mb-30"
                            style="background: url(img/bg/services-bg-01.png) no-repeat;background-size: contain; background-position: center bottom; background-size: cover;">
                            <div class="services-icon">
                                <img src="img/icon/pv-icon3.png" alt="icon01">
                            </div>
                            <div class="services-content2">
                                <h5><a href="services-detail.html">Composition</a></h5>
                                <p>Nulla lacinia odio purus, sed varius eros aucto.</p>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-6">

                        <div class="services-box text-center mb-30"
                            style="background: url(img/bg/services-bg-01.png) no-repeat;background-size: contain; background-position: center bottom; background-size: cover;">
                            <div class="services-icon">
                                <img src="img/icon/pv-icon4.png" alt="icon01">
                            </div>
                            <div class="services-content2">
                                <h5><a href="services-detail.html">Lab Control</a></h5>
                                <p>Nulla lacinia odio purus, sed varius eros aucto.</p>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <!-- services-area-end -->
        <!-- about-area -->
        <section id="about" class="about-area about-p pt-50 pb-120 p-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative">
                            <img src="img/features/about_img.png" alt="img">
                        </div>
                        <div class="about-text second-about">
                            <span>35 </span>
                            Years of Experience
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="about-title second-title pb-25">
                                <h2>We Deliver The Quality Water</h2>
                                <div class="line"> <img src="img/bg/circle_left.png" alt="circle_right"></div>

                            </div>

                            <p>Donec dictum non eros ut sollicitudin. Sed vel nisl nec odio venenatis pretium. Aenean a
                                condimentum metus. Nulla scelerisque elit aliquet, volutpat lorem ac, accumsan enim. Duis
                                malesuada varius leo, eu pellentesque metus pharetra a. Nam commodo ut diam ut laoreet.</p>
                            <p>Morbi pretium, nisl sit amet placerat imperdiet, enim massa venenatis purus, in tincidunt
                                lorem augue ac nunc. Pellentesque risus massa, vulputate cursus tortor quis, iaculis maximus
                                neque.Aenean hendrerit, libero sed viverra auctor.</p>
                            <div class="about-content3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="green">
                                            <li>Praesent quis elit egestas, sagittis orci vel, vehicula erat tiam et luctus.
                                            </li>
                                            <li>Vivamus efficitur mollis turpis. Ut nec dui commodo, egestas dolor.</li>
                                            <li>Nunc eleifend pulvinar sapien convallis eleifend.</li>
                                            <li>Mauris vel nisi quis massa facilisis consectetur vel at erat et porttitor.
                                            </li>
                                        </ul>
                                    </div>

                                </div>


                            </div>
                            <div class="slider-btn mt-20">
                                <a href="about.html" class="btn ss-btn">Learn More</a>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- counter-area -->
        <div class="counter-area p-relative pt-80 pb-80"
            style="background: url(img/bg/counter-bg.png) no-repeat;background-size: contain; background-position: center bottom; background-size: cover;">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="section-title">
                            <h2>
                                Fun Fact
                            </h2>
                            <span class="line5"> <img src="img/bg/circle_left_w.png" alt="circle_left"></span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                                    data-delay=".2s">
                                    <div class="icon">
                                        <img src="img/icon/cn-iocn01.png" alt="img">
                                    </div>

                                    <div class="counter p-relative">
                                        <span class="count">784</span>
                                        <p>Happy Clients</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                                    data-delay=".2s">
                                    <div class="icon">
                                        <img src="img/icon/cn-iocn02.png" alt="img">
                                    </div>
                                    <div class="counter p-relative">
                                        <span class="count">987</span>
                                        <p>Happy Clients</p>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                                    data-delay=".2s">
                                    <div class="icon">
                                        <img src="img/icon/cn-iocn03.png" alt="img">
                                    </div>

                                    <div class="counter p-relative">
                                        <span class="count">974</span>
                                        <p>Employees</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated"
                                    data-delay=".2s">
                                    <div class="icon">
                                        <img src="img/icon/cn-iocn04.png" alt="img">
                                    </div>

                                    <div class="counter p-relative">
                                        <span class="count">687</span>
                                        <p>Annual Turnover</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <!-- counter-area-end -->


        <!-- service-details2-area -->
        <section id="service-details2" class="service-details-two pt-120 pb-120 p-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mb-50 text-center">

                            <h2>
                                What’s Our Story
                            </h2>
                            <span class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></span>
                            <p>Our company was founded in 2008. Water Brand bottle is great for drinking, cooking,
                                activities, and even for children. The product is certified in 50 countries.</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="about-content s-about-content">

                            <ul class="sr-tw-ul text-right">
                                <li>

                                    <div class="text pt-10">
                                        <h4>No Preservatives</h4>
                                        <p>Praesent porttitor, velit et dapibu eleifend, ligula sapien placerat sem, vel
                                            sodale.</p>
                                    </div>
                                    <div class="icon-right"><img src="img/icon/fe-icon01.png" alt="icon01"></div>
                                </li>
                                <li>

                                    <div class="text pt-10">
                                        <h4>Add Micro Mineral</h4>
                                        <p>Praesent porttitor, velit et dapibu eleifend, ligula sapien placerat sem, vel
                                            sodale.</p>
                                    </div>
                                    <div class="icon-right"><img src="img/icon/fe-icon05.png" alt="icon01"></div>
                                </li>
                                <li>

                                    <div class="text pt-10">
                                        <h4>Natural Quality</h4>
                                        <p>Praesent porttitor, velit et dapibu eleifend, ligula sapien placerat sem, vel
                                            sodale.</p>
                                    </div>
                                    <div class="icon-right"><img src="img/icon/fe-icon07.png" alt="icon01"></div>
                                </li>


                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 pr-30 d-none d-lg-block">
                        <div class="sd-img">
                            <img src="img/features/services-img-details2.png" alt="img">
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="about-content s-about-content">

                            <ul class="sr-tw-ul">
                                <li>
                                    <div class="icon"><img src="img/icon/fe-icon04.png" alt="icon01"></div>
                                    <div class="text pt-10">
                                        <h4>Antioxidant</h4>
                                        <p>Praesent porttitor, velit et dapibu eleifend, ligula sapien placerat sem, vel
                                            sodale.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><img src="img/icon/fe-icon06.png" alt="icon01"></div>
                                    <div class="text pt-10">
                                        <h4>All Vitamins</h4>
                                        <p>Praesent porttitor, velit et dapibu eleifend, ligula sapien placerat sem, vel
                                            sodale.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><img src="img/icon/fe-icon08.png" alt="icon01"></div>
                                    <div class="text pt-10">
                                        <h4>Taste Like Home</h4>
                                        <p>Praesent porttitor, velit et dapibu eleifend, ligula sapien placerat sem, vel
                                            sodale.</p>
                                    </div>
                                </li>

                            </ul>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- service-details2-area-end -->

        <!-- video-area -->
        <section id="video" class="video-area about-p pb-120 p-relative"
            style="background-image:url(img/bg/video-bg.png); background-repeat: no-repeat; background-position: center bottom; background-size: 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="s-video-wrap" style="background-image:url(img/bg/video-img.png)">
                            <div class="s-video-content">
                                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><img
                                        src="img/bg/play-button.png" alt="circle_right"></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mt-50 text-center">

                            <h2>
                                See How We Work
                            </h2>
                            <span class="line5"> <img src="img/bg/circle_left_w.png" alt="circle_left"></span>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                                iaculis bibendum justo, vitae lobortis augue posuere eu. Nulla aliquet varius libero eu
                                sagittis. Sed fermentum varius hendrerit. Ut velit libero.</p>
                            <div class="slider-btn mt-30">
                                <a href="contact.html" class="btn ss-btn">Contact Us</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end -->

        <!-- pricing-area -->
        <section id="pricing" class="pricing-area pt-120 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mb-30 text-center">

                            <h2>
                                Choose Your Plan
                            </h2>
                            <span class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></span>

                        </div>
                        <nav class="pricing-tab mb-30">
                            <span class="monthly_tab_title">Monthly</span>
                            <span class="pricing-tab-switcher"></span>
                            <span class="annual_tab_title">Annual</span>
                        </nav>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box pricing-box2 mb-60">
                            <div class="pricing-head text-center">
                                <h3>Starter</h3>
                                <div class="price-count pricing-amount">
                                    <div class="monthly_price">
                                        <h2>$9</h2>
                                        <span class="subscription"> Per Month </span>
                                    </div>
                                    <div class="annual_price">
                                        <h2>$99</h2>
                                        <span class="subscription"> Per Annual </span>
                                    </div>
                                </div>
                                <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                <hr>
                            </div>

                            <div class="pricing-body mt-20 mb-30">
                                <ul>
                                    <li>Pack Of 5 Bottles</li>
                                    <li>Free Delivery Service</li>
                                    <li>Free Water Fillter Cleaning</li>
                                    <li>Re-Water Filling Service</li>
                                    <li>24X7 Support</li>
                                </ul>
                            </div>

                            <div class="pricing-btn text-center">
                                <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                <p>*Free Trial 14 Days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box pricing-box2 active mb-60">
                            <div class="pricing-head text-center">
                                <h3>Professional</h3>
                                <div class="price-count pricing-amount">

                                    <div class="monthly_price">
                                        <h2>$18</h2>
                                        <span class="subscription"> Per Month </span>
                                    </div>
                                    <div class="annual_price">
                                        <h2>$120</h2>
                                        <span class="subscription"> Per Annual </span>
                                    </div>
                                </div>
                                <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                <hr>
                            </div>

                            <div class="pricing-body mt-20 mb-30">
                                <ul>
                                    <li>Pack Of 5 Bottles</li>
                                    <li>Free Delivery Service</li>
                                    <li>Free Water Fillter Cleaning</li>
                                    <li>Re-Water Filling Service</li>
                                    <li>24X7 Support</li>
                                </ul>
                            </div>

                            <div class="pricing-btn text-center">
                                <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                <p>*Free Trial 14 Days</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-box pricing-box2 mb-60">
                            <div class="pricing-head text-center">
                                <h3>Enterprise</h3>
                                <div class="price-count pricing-amount">
                                    <div class="monthly_price">
                                        <h2>$49</h2>
                                        <span class="subscription"> Per Month </span>
                                    </div>
                                    <div class="annual_price">
                                        <h2>$399</h2>
                                        <span class="subscription"> Per Annual </span>
                                    </div>
                                </div>
                                <p>Nulla scelerisque elit aliquet, <br>volutpat lorem ac.</p>
                                <hr>
                            </div>

                            <div class="pricing-body mt-20 mb-30 ">
                                <ul>
                                    <li>Pack Of 5 Bottles</li>
                                    <li>Free Delivery Service</li>
                                    <li>Free Water Fillter Cleaning</li>
                                    <li>Re-Water Filling Service</li>
                                    <li>24X7 Support</li>
                                </ul>
                            </div>

                            <div class="pricing-btn text-center">
                                <a href="shop-details.html" class="btn ss-btn">Gets Started</a>
                                <p>*Free Trial 14 Days</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->


        <!-- testimonial-area -->
        <section class="testimonial-area p-relative pt-120 pb-170">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title center-align mb-30">

                            <h2>
                                What Are People Saying About Us
                            </h2>
                            <div class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></div>

                        </div>
                        <div class="test-img">
                            <img src="img/testimonial/test-img.png" alt="circle_left">
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="testimonial-active">
                            <div class="single-testimonial">

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                                <h3>Taste Like Haven </h3>
                                <p>Etiam quis lacinia ipsum. Aliquam blandit, mauris nec molestie interdum, quam massa
                                    finibus turpis, ut eleifend tellus massa eget nunc. Maecenas luctus diam id augue
                                    fringilla ornare. Sed varius massa non sem rutrum malesuada.</p>
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Eity Akhter</h6>
                                        <span>Student</span>
                                    </div>
                                </div>

                            </div>
                            <div class="single-testimonial">

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                                <h3>Taste Like Haven </h3>
                                <p>Etiam quis lacinia ipsum. Aliquam blandit, mauris nec molestie interdum, quam massa
                                    finibus turpis, ut eleifend tellus massa eget nunc. Maecenas luctus diam id augue
                                    fringilla ornare. Sed varius massa non sem rutrum malesuada.</p>
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Margie R. Robinson</h6>
                                        <span>Web Developer</span>
                                    </div>
                                </div>

                            </div>
                            <div class="single-testimonial">

                                <div class="qt-img">
                                    <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                                <h3>Taste Like Haven </h3>
                                <p>Etiam quis lacinia ipsum. Aliquam blandit, mauris nec molestie interdum, quam massa
                                    finibus turpis, ut eleifend tellus massa eget nunc. Maecenas luctus diam id augue
                                    fringilla ornare. Sed varius massa non sem rutrum malesuada.</p>
                                <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Margie R. Robinson</h6>
                                        <span>Web Developer</span>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->
        <!-- team-area -->
        <section id="team" class="team-area2 pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-relative">
                        <div class="section-title center-align mb-50">
                            <h2>Our Experts</h2>
                            <div class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></div>
                        </div>
                    </div>

                </div>
                <div class="row home-blog-active">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team text-center mb-30 ">
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="img/team/team_img01.png" alt="img">
                                </div>
                                <div class="social align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Nashid Martines</a></h4>
                                <span>Founder</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team text-center mb-30 ">
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="img/team/team_img02.png" alt="img">
                                </div>
                                <div class="social align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Konne Backfield</a></h4>
                                <span>CEO</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team text-center mb-30 ">
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="img/team/team_img03.png" alt="img">
                                </div>
                                <div class="social align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Hackson Willing</a></h4>
                                <span>Developer</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team text-center mb-30 ">
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="img/team/team_img06.png" alt="img">
                                </div>
                                <div class="social align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4><a href="team-details.html">Rosalina D. William</a></h4>
                                <span>Founder</span>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- team-area-end -->

        <!-- blog-area -->
        <section id="blog" class="blog-area p-relative pt-120 pb-90 fix" style="background: #f3f7fd;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center">
                            <h2>
                                Latest Blog & News
                            </h2>
                            <div class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="single-post2 mb-30">

                            <div class="blog-thumb2">
                                <a href="blog-details.html"><img src="img/blog/inner_b1.jpg" alt="img"></a>
                                <div class="date">
                                    <i class="fal fa-calendar-alt"></i> 24th March 2021
                                </div>
                            </div>
                            <div class="blog-content2">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4><a href="blog-details.html">Aliquam luctus nisi eget orci facilisis, at commodo
                                                risus tincidunt.</a></h4>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="blog-btn"><a href="blog-details.html">Read More <i
                                                    class="fas fa-angle-right"></i></a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="single-post2 mb-30">

                            <div class="blog-thumb2">
                                <a href="blog-details.html"><img src="img/blog/inner_b1.jpg" alt="img"></a>
                                <div class="date">
                                    <i class="fal fa-calendar-alt"></i> 24th March 2021
                                </div>
                            </div>
                            <div class="blog-content2">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4><a href="blog-details.html">Aliquam luctus nisi eget orci facilisis, at commodo
                                                risus tincidunt.</a></h4>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="blog-btn"><a href="blog-details.html">Read More <i
                                                    class="fas fa-angle-right"></i></a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- blog-area-end -->
        <!-- contact-area -->
        <section id="contact" class="contact-area after-none contact-bg pt-120 pb-60 p-relative fix">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">
                        <img src="img/bg/contact-img2.png" alt="circle_left">
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-bg02 wow fadeInLeft  animated">
                            <div class="section-title center-align">

                                <h2>
                                    Get A Quote
                                </h2>
                                <span class="line5"> <img src="img/bg/circle_left.png" alt="circle_left"></span>
                            </div>
                            <p>Vivamus vitae nisi faucibus, congue erat in, lobortis diam. Suspendisse nisi quam, ultrices
                                ut placerat non, dignissim et nisi. </p>

                            <form class="contact-form mt-30" id="getContact">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="name" name="name" placeholder="F.I.O"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-30">
                                            <input type="text" id="phone" name="phone" placeholder="+998"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Xabar qoldirish"></textarea>
                                        </div>
                                        <div class="slider-btn">
                                            <button class="btn ss-btn" data-animation="fadeInRight">Submint Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
        <!-- brand-area -->
        <div class="brand-area pt-60 pb-60">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo3.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo4.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo5.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo6.png" alt="img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- brand-area-end -->
    </main>
@endsection