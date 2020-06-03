<?php
session_start();
$github   = "https://github.com/shamsPathan";
$linkedin = "https://www.linkedin.com/in/shamspathan/";
$facebook = "https://www.facebook.com/shamspathan";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Shams Uddin Pathan portfolio">
    <meta name="keywords" content="HTML, CSS, JavaScript, shams uddin pathan, Vuejs developer bangladesh, Web developer bangladesh, fullstack developer bangladesh">
    <meta name="author" content="Shams Pathan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Shams Pathan | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/style.min.css?version=1.2">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="pixel-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="pixelNav">

                        <!-- Nav brand -->
                        <a href="/" class="nav-brand"> <span class="name-logo">Shams Pathan</span> </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#projects">Projects</a></li>
                                    <li><a target="_blank" href="/shamsPathanRESUME.pdf">RESUME</a></li>
                                    <!-- <li><a href="#">Blogs</a></li> -->
                                    <li><a href="#contact">Contact</a></li>
                                </ul>

                                <!-- Top Social Info -->
                                <div class="top-social-info ml-5">
                                    <a target="_blank" href="<?=$github?>"><i class="fa fa-github"></i></a>
                                    <a target="_blank" href="<?=$linkedin?>"><i class="fa fa-linkedin"></i></a>
                                    <a target="_blank" href="<?=$facebook?>"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
   
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top-catagory-area d-flex flex-wrap" id="home">
        <!-- Single Catagory -->
        <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(/img/bg-img/3.jpg);">
            <a href="#">FullStack</a>
        </div>
        <!-- Single Catagory -->
        <div class="single-catagory bg-img d-flex align-items-center justify-content-center jarallax" style="background-image: url(/img/bg-img/4.jpg);">
            <a href="#">Web Developer</a>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->


    <!-- ##### Portfolio Area Start ###### -->
    <div class="pixel-portfolio-area section-padding-100-0" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Made by Shams</h2>
                        <img src="img/core-img/x.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Menu -->
        <div class="pixel-projects-menu wow fadeInUp" data-wow-delay="200ms">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">All Projects</button>
                <button class="btn" data-filter=".visual">Web Design</button>
                <button class="btn" data-filter=".add">Mix</button>
                <button class="btn" data-filter=".web">Web Development</button>
            </div>
        </div>

        <div class="pixel-portfolio">

            <!-- Single gallery Item -->
            <div class="single_gallery_item web wow fadeInUp" data-wow-delay="0.2s">
                <img src="/img/bg-img/7.jpg" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="/img/bg-img/7.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Raw PHP, JS Medical Store</h4>
                        <h6>
                        >> <a target="_blank" href="https://github.com/shamsPathan/raw-shop">Codes Sample</a> <<
                        </h6>
                        <h6>
                        >> <a target="_blank" href="https://www.medicalshopbd.com/">Live</a> <<
                        </h6>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item web visual wow fadeInUp" data-wow-delay="0.2s">
                <img src="/img/bg-img/learn.jpg" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="/img/bg-img/learn.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Laravel & Vue Learning Platform</h4>
                        <h6>
                        >> <a target="_blank" href="https://github.com/shamsPathan/vueEcomControllers">Codes Sample</a> <<
                        </h6>
                    </div>
                </div>
            </div>

            <div class="single_gallery_item web visual wow fadeInUp" data-wow-delay="0.6s">
                <img src="/img/bg-img/adams.jpg" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="/img/bg-img/adams.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Laravel Ecommerce</h4>
                        >> <a target="_blank" href="https://www.youradamsbd.com/">Live</a> <<
                        </h6>
                    </div>
                </div>
            </div>
            
            <div class="single_gallery_item web visual wow fadeInUp" data-wow-delay="0.6s">
                <img src="/img/bg-img/pharmacy.png" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="/img/bg-img/pharmacy.png" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Pharmacy Store in LARAVEL</h4>
                        >> <a target="_blank" href="https://www.livepharmacy.com/">Live</a> <<
                        </h6>
                    </div>
                </div>
            </div>
            

            <!-- Single gallery Item -->
            <div class="single_gallery_item add wow fadeInUp" data-wow-delay="0.4s">
                <img src="/img/bg-img/5.jpg" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="/img/bg-img/5.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Vanilla JS Music App</h4>
                        <h6>
                        >> <a target="_blank" href="https://github.com/shamsPathan/music">Codes Sample</a> <<
                        </h6>
                        <h6>
                        >> <a target="_blank" href="https://shamspathan.github.io/music/">Live</a> <<
                        </h6>
                    </div>
                </div>
            </div>

            <!-- Single gallery Item -->
            <div class="single_gallery_item web visual wow fadeInUp" data-wow-delay="0.6s">
                <img src="/img/bg-img/6.jpg" alt="">
                <div class="hover-content text-center d-flex align-items-center justify-content-center">
                    <div class="hover-text">
                        <a href="/img/bg-img/6.jpg" class="zoom-img"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <h4>Design Ecommerce</h4>
                        >> <a target="_blank" href="#">Live</a> <<
                        </h6>
                    </div>
                </div>
            </div>
           

        </div>
    </div>
    <!-- ##### Portfolio Area End ###### -->

    <!-- ##### Contact Area Start #####-->
    <section class="contact-area section-padding-100" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Something on mind?</h2>
                        <img src="img/core-img/x.png" alt="">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form-area text-center">
                        <form action="/message.php" method="post">
                            <input type="text" name="name" class="form-control wow fadeInUp" data-wow-delay="100ms" placeholder="Name">
                            <input type="email" name="email" class="form-control wow fadeInUp" data-wow-delay="300ms" placeholder="E-mail">
                            <input type="text" name="subject" class="form-control wow fadeInUp" data-wow-delay="500ms" placeholder="Subject">
                            <textarea name="message" class="form-control wow fadeInUp" data-wow-delay="700ms" placeholder="Message"></textarea>
                            <button type="submit" class="btn pixel-btn wow fadeInUp" data-wow-delay="900ms">Tell me</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Contact Area End #####-->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-footer-widget mb-100">
                        <!-- Footer Logo -->
                        <a href="index.html" class="footer-logo"><span class="name-logo">Shams Pathan</span></a>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-9 col-lg-8 col-xl-7">
                    <div class="row">
                        <!-- Single Footer Widget -->
                        <div class="col-sm-4">
                            <div class="single-footer-widget mb-100">
                                <h5 class="widget-title">Address</h5>
                                <p>Dhanmondi 32 <br> Dhaka-1207, Bangladesh</p>
                            </div>
                        </div>

                        <!-- Single Footer Widget -->
                        <div class="col-sm-4">
                            <div class="single-footer-widget mb-100">
                                <h5 class="widget-title">Support</h5>
                                <p><i class="fa fa-phone"></i> <br> +880 1314 474643 </p>
                            </div>
                        </div>

                        <!-- Single Footer Widget -->
                        <div class="col-sm-4">
                            <div class="single-footer-widget mb-100">
                                <h5 class="widget-title">Social</h5>
                                <div class="footer-social-info">
                                    <a target="_blank" href="<?=$github?>"><i class="fa fa-github"></i></a>
                                    <a target="_blank" href="<?=$linkedin?>"><i class="fa fa-linkedin"></i></a>
                                    <a target="_blank" href="<?=$facebook?>"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
       
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.min.js"></script>
</body>

</html>