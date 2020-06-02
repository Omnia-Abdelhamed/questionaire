<?php
    include '../admin/connect.php';
    session_start();
    if(!isset($_SESSION['student_id'])){
        header("location: login.php");
    }

    $student_id=$_SESSION['student_id'];
    $select_std="SELECT * FROM students WHERE student_id='$student_id'";
    $select_std_result=mysqli_query($connect,$select_std);
    $std_row=mysqli_fetch_assoc($select_std_result);
    $dep=$std_row['dept_id'];
    $grade=$std_row['grade_id'];

    $select_subjects="SELECT * FROM subjects WHERE dept_id='$dep' AND grade_id='$grade'";
    $select_subjects_result=mysqli_query($connect,$select_subjects);

    $subjects_data= array();

    while ($subject_row=mysqli_fetch_assoc($select_subjects_result)) {
        $subjects_data[]=$subject_row;
    }

    $count=1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head -->

    <!-- Title -->
    <title> معاهد العبور  </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="pag.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
        .table tr th{
           // background-color: #333;
            //color: #fff;
            text-align: center;
        }
       
    </style>

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header  Start ##### -->
    <header class="header-area">

        <!-- Top Header  -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/2.png" alt=""></a>
                            </div>
                            <div class="login-content">
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

                        <!-- Navbar  -->
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
                                    <li><a href="logout.php"> تسجيل خروج  </a></li>
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
    <!-- ##### Header  End ##### -->

    <!-- ##### Breadcumb  Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>المواد</h2>
        </div>
    </div><br>
    <br>
    <br>
    <br>
    <div class="container">
        
        <div class="table-responsive" style="direction: rtl;margin-bottom: 35px;">
            <table class="table">
                <thead>
                    <tr>
                        <th>م</th>
                        <th>اسم الماده</th>
                        <th>كود الماده </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($subjects_data as $value) { ?>
                        <tr>
                            <td style="text-align: right;"><?php echo $count; ?></td>
                            <td style="float:center;text-align: right;"><a href="sub_questions.php?sub_id=<?php echo $value['subject_id'] ?>"><?php echo $value['name']; ?></a></td>
                            <td style="text-align: right;"><a href="sub_questions.php?sub_id=<?php echo $value['subject_id'] ?>"><?php echo $value['subject_code']; ?></a></td>
                        </tr>
                    <?php $count++; } ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- ##### Footer  Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer-->
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
                    <!-- Footer -->
                    <div class="col-12 col-sm-6 col-lg-3">
                    
                    </div>
                    <!-- Footer -->
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
                    <!-- Footer -->
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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script>
</body>

</html>