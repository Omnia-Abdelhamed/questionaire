<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head -->

    <!-- Title -->
    <title> معاهد العبور </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/2.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <!-- <a href="#">DESIGN BY| MOhamed Abdelhamed</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <?php

                                        session_start();
                                        if (isset($_SESSION['student_id'])) {?>
                                             <li><a href="logout.php"> تسجيل خروج  </a></li>
                                           
                                       <?php }
                                    ?>
                                    <li><a href="login.php"> الاستبيان</a></li>
                                    <li><a href="index.php">الرئيسيه</a></li>

                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:19308"><i class="icon-telephone-2"></i> <span>19308</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/23.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/ooo111.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/24.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero  End ##### -->

    <!-- ##### Top Feature  Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>التعليم الاليكتروني </h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>رائيس مجلس الاداره </h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>19308</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature  End ##### -->

    <!-- ##### Course  Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course  -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>التقديم اون لاين </h4>
                            <p>يمكنك التقديم في معاهد العبور اون لاين من هنا </p>
                        </div>
                    </div>
                </div>
                <!-- Single Course  -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <i class="icon-worldwide"></i>
                        </div>
                        <div class="course-content">
                            <h4>بنك المعرفه المصري </h4>
                            <p>يمكنك التسجيل في بنك المعرفه المصري من هنا </p>
                        </div>
                    </div>
                </div>
                <!-- Single Course  -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="course-content">
                            <h4>اتحاد مكتبات الجامعات المصريه</h4>
                            <p>للطلب عضويه في اتحاد مكتبات الجامعات المصريه اضغط هنا </p>
                        </div>
                    </div>
                </div>
                <!-- Single Course  -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-icon">
                            <i class="icon-like"></i>
                        </div>
                        <div class="course-content">
                            <h4>سوشيال مديا</h4>
                            <p>يمكنك متبعتنا من خلال صفحاتنا علي السوشيال مديا</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course  -->
                <div class="col-12 col-sm-6 col-lg-4" style="backgroudcolor:red;">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="course-icon">
                            <i class="icon-responsive"></i>
                        </div>
                        <div class="course-content">
                            <h4>المكتبه الاليكترونيه</h4>
                            <p>يمكنك عمل حساب علي المكتبه الاليكترونيه لدي معاهد العبور</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course  -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="course-content">
                            <h4>حفلات ورحلات</h4>
                            <p>للحجز في الحفلات والرحلات اضغط هنا </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course  End ##### -->

    

    <!-- ##### Partner  Start ##### -->
 
    <!-- ##### Partner  End ##### -->

    <!-- ##### CTA  Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#" class="btn academy-btn">اضغط هنا </a>
                        <h3 style="float:right">معهد العبور العالي للاداره والحاسبات ونظم المعلومات</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA  End ##### -->

    <!-- ##### Footer  Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer  Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/2.png" alt=""></a>
                            </div>
                            <p>ان يكون معهد العبور العالي ضمن افضل عشر مؤسسات تعليم مصريه خلال العقد القادم والمساهمة
                                الفعاله في تحقيق اهداف التنمبة المستدامة في المجتمع المصري .</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer  Area -->
                    <div class="col-12 col-sm-6 col-lg-3"></div>
                    <!-- Footer  Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>صور معاهد العبور</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/21 (1).jpeg" class="gallery-img" title="معهد العبور العالي للاداره والحاسبات ونظم المعلومات"><img
                                        src="img/21 (1).jpeg" alt=""></a>
                                <a href="img/21 (2).jpeg" class="gallery-img" title="البوابه الرئيسيه للمعاهد العبور"><img
                                        src="img/21 (2).jpeg" alt=""></a>
                                <a href="img/21 (5).jpeg" class="gallery-img" title="حفلة مينا عطا ومحمد شاهين بمعهد العبور"><img
                                        src="img/21 (5).jpeg" alt=""></a>
                                <a href="img/22.jpeg" class="gallery-img" title="المؤتمر العالمي للمعاهد العبور"><img
                                        src="img/22.jpeg" alt=""></a>
                                <a href="img/23.jpeg" class="gallery-img" title="معاهد العبور"><img src="img/23.jpeg"
                                        alt=""></a>
                                <a href="img/24.jpeg" class="gallery-img" title="معهد نظم "><img src="img/24.jpeg" alt=""></a>
                                <a href="img/24.jpeg" class="gallery-img" title="معهد نظم "><img src="img/24.jpeg" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <!-- Footer  Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>معلومات التواصل</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>العنوان : الكيلو21 طريق بلبيس الصحراوي معاهد العبور</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Main:19308 <br>Office:01200002003000</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>www.oi.edu.eg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            <!-- Link back to Colorlib -->
                           &copy;
                            <script>document.write(new Date().getFullYear());</script> | Group 38 4 IS 
                            <!-- Link back to Colorlib  -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer  Start ##### -->

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
    <script src="js/active.js"></script>
</body>

</html>