<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.styleuser')
</head>
<body>
    @include('sweetalert::alert')
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-7">
                    <ul class="info">
                        <li><a href="#"><i class="fa fa-envelope"></i>nongkrongkoding@media.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-4 col-5">
                    <ul class="social-media">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('components.usernav')

    <!-- TOP DATA PAGE -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>Digital Media Agency</h6>
                                        <h2>We Boost Your Website Traffic</h2>
                                        <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="border-first-button scroll-to-section">
                                            <a href="#contact">Free Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('landing/assets/images/slider-dec-v3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT THIS PAGE -->
    <div id="about" class="about section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{ asset('landing/assets/images/about-dec-v3.png') }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>About Us</h6>
                                    <h4>Who is DigiMedia <em>Agency</em></h4>
                                    <div class="line-dec"></div>
                                </div>

                                <p>We hope this DigiMedia template is useful for your work. You can use this template for any purpose. You may <a rel="nofollow" href="http://paypal.me/templatemo" target="_blank">contribute a little amount</a> via PayPal to <a href="https://templatemo.com/contact" target="_blank">support TemplateMo</a> in creating new templates regularly.</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="90">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                
                                                <div class="progress-value">
                                                    <div>
                                                        90%<br>
                                                        <span>Coding</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                
                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Photoshop</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>

                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                
                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Animation</span>
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

    <!-- SERVICES PAGE -->
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Our Services</h6>
                        <h4>What Our Agency <em>Provides</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{ asset('landing/assets/images/service-icon-01.png') }}" alt=""></span>
                                                Apartments
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">                 
                                                <span class="icon"><img src="{{ asset('landing/assets/images/service-icon-02.png') }}" alt=""></span>
                                                Food &amp; Life
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">                 
                                                <span class="icon"><img src="{{ asset('landing/assets/images/service-icon-03.png') }}" alt=""></span>
                                                Cars
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">                 
                                                <span class="icon"><img src="{{ asset('landing/assets/images/service-icon-04.png') }}" alt=""></span>
                                                Shopping
                                            </div>
                                        </div>

                                        <div class="last-thumb">
                                            <div class="thumb">                 
                                                <span class="icon"><img src="{{ asset('landing/assets/images/service-icon-01.png') }}" alt=""></span>
                                                Traveling
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>SEO Analysis &amp; Daily Reports</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Healthy Food &amp; Life</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image-02.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Car Re-search &amp; Transport</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image-03.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Online Shopping &amp; Tracking ID</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image-04.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Enjoy &amp; Travel</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list">
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span>
                                                                    <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Optimized Template</span>
                                                                </div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{ asset('landing/assets/images/services-image.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- QUOTE PAGE -->
    <div id="free-quote" class="free-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Get Your Free Quote</h6>
                        <h4>Grow With Us Now</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                    <form id="search" action="#" method="GET">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <input type="web" name="web" class="website" placeholder="Your website URL..." autocomplete="on" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-sm-4">
                                <fieldset>
                                    <button type="submit" class="main-button">Get Quote Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- PORTOFOLIO PAGE -->
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Our Portofolio</h6>
                        <h4>See Our Recent <em>Projects</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('landing/assets/images/portfolio-01.jpg') }}" alt="">
                                    </div>

                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>  
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('landing/assets/images/portfolio-01.jpg') }}" alt="">
                                    </div>

                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>  
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('landing/assets/images/portfolio-02.jpg') }}" alt="">
                                    </div>

                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>  
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('landing/assets/images/portfolio-03.jpg') }}" alt="">
                                    </div>

                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>  
                        </div>

                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('landing/assets/images/portfolio-04.jpg') }}" alt="">
                                    </div>
                                    
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BLOG PAGE -->
    <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="section-heading">
                        <h6>Recent News</h6>
                        <h4>Check Our Blog <em>Posts</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-post">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('landing/assets/images/blog-post-01.jpg') }}" alt=""></a>
                        </div>

                        <div class="down-content">
                            <span class="category">SEO Analysis</span>
                            <span class="date">03 August 2021</span>

                            <a href="#">
                                <h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore Eiusmod Tempor Incididunt</h4>
                            </a>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
                            
                            <span class="author">
                                <img src="{{ asset('landing/assets/images/author-post.jpg') }}" alt="">
                                By: Andrea Mentuzi
                            </span>

                            <div class="border-first-button">
                                <a href="#">
                                    Discover More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="blog-posts">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('landing/assets/images/blog-post-02.jpg') }}" alt="">
                                        </a>
                                    </div>

                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="post-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('landing/assets/images/blog-post-03.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="post-item last-post-item">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('landing/assets/images/blog-post-04.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="right-content">
                                        <span class="category">SEO Analysis</span>
                                        <span class="date">24 September 2021</span>
                                        <a href="#">
                                            <h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACTS PAGE -->
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Contact Us</h6>
                        <h4>Get In Touch With Us <em>Now</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>

                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="{{ asset('landing/assets/images/contact-dec-v3.png') }}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div id="map">
                                    {{-- <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63828.914749279924!2d104.44957766074359!3d0.9171476503030395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d972f6dec85825%3A0xec4ab548c30d02a1!2sTanjung%20Pinang%2C%20Tanjung%20Pinang%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1670358120541!5m2!1sen!2sid" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                <img src="{{ asset('landing/assets/images/phone-icon.png') }}" alt="">
                                                <a href="#">010-020-0340</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('landing/assets/images/email-icon.png') }}" alt="">
                                                    <a href="#">our@email.com</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{ asset('landing/assets/images/location-icon.png') }}" alt="">
                                                    <a href="#">123 Rio de Janeiro</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                            </fieldset>

                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                            </fieldset>

                                            <fieldset>
                                                <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-6">
                                            <fieldset>
                                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPONENT && INCLUDES FOOTER & SCRIPT -->
    @include('components.userfooter')
    @include('includes.scriptuser')
</body>
</html>