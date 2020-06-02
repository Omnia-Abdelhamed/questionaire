<?php

    include '../admin/connect.php';
    session_start();
    if(!isset($_SESSION['student_id'])){
        header("location: login.php");
    }

    $std_id=$_SESSION['student_id'];

    if (isset($_GET['sub_id'])) {
        $sub_id=$_GET['sub_id'];
    }else{
        $sub_id=0;
    }

    $is_exist_sql="SELECT * FROM result WHERE subject_id='$sub_id' AND std_id='$std_id'";
    $is_exist_sql_result=mysqli_query($connect,$is_exist_sql);
    $std_num=mysqli_num_rows($is_exist_sql_result);

    $select_sub="SELECT * FROM subjects WHERE subject_id='$sub_id'";
    $select_sub_result=mysqli_query($connect,$select_sub);
    $sub_row=mysqli_fetch_assoc($select_sub_result);

    $select_cat="SELECT * FROM titles";
    $select_cat_result=mysqli_query($connect,$select_cat);

    $cat_data= array();

    while ($cat_row=mysqli_fetch_assoc($select_cat_result)) {
        $cat_data[]=$cat_row;
    }

    $select_qu_num="SELECT * FROM questions";
    $select_qu_num_result=mysqli_query($connect,$select_qu_num);
    $qu_num=mysqli_num_rows($select_qu_num_result);
    $total=$qu_num*5;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $sum=0;
        foreach ($_POST as $key => $value) {
            if (! empty($value)) {
                $insert_details="INSERT INTO `details`(`std_id`, `subject_id`, `question_id`, `answer`) VALUES ('$std_id','$sub_id','$key','$value')";
                $insert_details_result=mysqli_query($connect,$insert_details);
                if ($insert_details_result) {
                    $sum=$sum+$value;  
                }
            }
        }
        if ($insert_details_result) {
            $final_result=($sum/$total)*100;

            $insert_answer="INSERT INTO `result`(`std_id`, `subject_id`, `answer`) VALUES ('$std_id','$sub_id','$final_result')";
            $insert_result=mysqli_query($connect,$insert_answer);
            if ($insert_result) {
                header("location: subject.php");
            }
        }   
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; -->

    <!-- Title -->
    <title>معاهد العبور </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pag.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
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
                                  <!--   <li><a href="#"> التعليم الاليكتروني</a>
                                        <ul class="dropdown">

                                            <li><a href="index.html">المحاضرات</a></li>
                                            <li><a href="#"> الامتحانات الاليكترونيه</a>
                                            <li><a href="contact.html"> مواعيد المحاضرات</a></li>
                                        </ul> -->
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
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/3.jpg);height: 110px;">
        <!-- <div class="bradcumbContent">
            <h2>الاستبيان</h2>
        </div> -->
    </div>
    <div class="mydp">
        <h2>الاستبيان</h2>

        <p style="text-align: right;font-size: 16px;font-family: cursive;">
            طلابنا الاعزاء فيما يلى مجموعة من الاسئلة والعبارات التى تخص تقييم  المقرر الدراسى  الذى تم دراسته خلال
            الفصل الدراسى، بهدف التعرف على ارائكم حول المقرر الدراسى الذى تم دراستة لتطويرة وقياس مدى رضائكم عنه  &nbsp;
            <span style="color: #61ba6d;font-weight: bold;">ملحوظة : </span>جميع البيانات التى سيتم جمعها سرية ولن يتم استخدامها الا فى اعمال الجودة بالمعهد
        </p>
    </div><br><br>

    <div class="par">
        <div class="fr  ">
            <p style="margin-right:40px;font-size: 16px;font-family: cursive;"><span style="color: #61ba6d;font-weight: bold;font-size: 20px;">اسم المقرر : </span><?php echo $sub_row['name']; ?></p>
        </div>
        <div class="fl  ">

            <p style="margin-left: 140px;font-size: 16px;font-family: cursive;"><span style="color: #61ba6d;font-weight: bold;font-size: 20px;">كود المقرر : </span><?php echo $sub_row['subject_code']; ?></p>
        </div>
    </div><br><br><br>
    <br>
    <br>
    <br>
<?php if ($std_num==0) { ?>
    <div class="teb">
        <form method="post">
            <?php foreach ($cat_data as $value) { 
                $title_id=$value['title_id'];
                $select_qu="SELECT * FROM questions WHERE title_id='$title_id'";
                $select_qu_result=mysqli_query($connect,$select_qu);

                $qu_data= array();

                while ($qu_row=mysqli_fetch_assoc($select_qu_result)) {
                    $qu_data[]=$qu_row;
                }
            ?>
                <h3 style="margin-left: 300px;margin-top: 30px;direction: rtl;"><?php echo $value['title']; ?></h3>
                <table class="table">
                    <thead class="thead-dark">
                      
                    </thead>
                    <?php $count=1; foreach ($qu_data as $qu_value) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="display: inline-block;">
                                        <label> لا اوافق تماما  </label>
                                        <input type="radio" name="<?php echo $qu_value['question_id'] ?>" required="" value="1">
                                    </div>
                                    <div style="display: inline-block;">
                                        <label> لا اوافق  </label>
                                        <input type="radio" name="<?php echo $qu_value['question_id'] ?>" required="" value="2">
                                    </div>
                                    <div style="display: inline-block;">
                                        <label> محايد </label>
                                        <input type="radio" name="<?php echo $qu_value['question_id'] ?>" required="" value="3">
                                    </div>
                                    <div style="display: inline-block;">
                                        <label>اوافق  </label>
                                        <input type="radio" name="<?php echo $qu_value['question_id'] ?>" required="" value="4">
                                    </div>
                                    <div style="display: inline-block;">
                                        <label> اوافق بشدة </label>
                                        <input type="radio" name="<?php echo $qu_value['question_id'] ?>" required="" value="5">
                                    </div>
                                </td>
                                <td class="fr"><?php echo $qu_value['question']; ?></td>
                                <th scope="row"><?php echo $count; ?></th>

                            </tr>
                        </tbody>
                    <?php $count++ ; } ?>
                </table>
            <?php } ?>
            <!-- end -->
            <input type="submit" value="ارسال" class="btn btn-block" style="color: #fff;background-color: #61ba6d;">
        </form>
    </div>
<?php }else{ ?>
    <div class="teb" style="direction: rtl;
    text-align: right;
    background: #63d272;
    margin: 50px auto;
    box-sizing: border-box;
    padding-right: 137px;
    border-radius: 70px;">
        <h1 style="color: #fff;line-height: 2.3;">لقد اتممت  استبيان هذه المادة من قبل ..</h1>
    </div>
<?php } ?>
    <!-- ##### Footer  Start ##### -->
    <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget  -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/2.png" alt=""></a>
                            </div>
                            <p>ان يكون معهد العبور العالي ضمن افضل عشر مؤسسات تعليم مصريه خلال العقد القادم والمساهمة الفعاله في تحقيق اهداف التنمبة المستدامة في المجتمع المصري .</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget  -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <!-- <div class="widget-title">
                                <h6>روابط تهمك</h6>
                            </div> -->
                          <!--   <nav>
                                <ul class="useful-links">
                                    <li><a href="#">جداول القاعات</a></li>
                                    <li><a href="#">جداول المحاضرات</a></li>
                                    <li><a href="#">جداول  الامتحانات </a></li>
                                </ul>
                            </nav> -->
                        </div>
                    </div>
                    <!-- Footer Widget  -->
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
                    <!-- Footer Widget  -->
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
        <!-- Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
        <script src="js/google-map/map-active.js"></script>
</body>

</html>