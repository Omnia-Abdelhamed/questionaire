<?php
	include '../admin/connect.php';
	session_start();
	if(isset($_SESSION['student_id'])){
		header("location: subject.php");
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$hashedpass=sha1($password);
		$sql="SELECT * FROM students WHERE email='$email' AND password='$hashedpass'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		if($count>0){
			$_SESSION['email']=$email;
			$_SESSION['student_id']=$row['student_id'];
			header("location: subject.php");
			exit();
		}
	}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>معاهد العبور</title>


    <!-- **************ليتك ربط css********************* -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/datatables.css">
    <link rel="stylesheet" href="../css/jquery-3.4.0.min.map">
    <link rel="stylesheet" href="../css/jquery-3.4.0.slim.min.map">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <!-- **************ليتك ربط css********************* -->


    <!-- ***************لينك ربط js*************** -->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/datatables.js"></script>
    <script src="../js/npm.js"></script>
    <script src="../js/package.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <!-- ***************لينك ربط js*************** -->
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        body{
          margin-left: 45%;
          margin-top: 20%;
        }
        /* Full-width input fields */
        input[type=email], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }
        
        img.avatar {
          width: 33%;
          border-radius: 50%;
        }
        
        .container {
            //width: 90%;
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        /* The Modal (background) */
        .modal {
          //display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          //height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: -37px auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        </style>


</head>
<body>
    <!-- <h2>تسجيل الدخول </h2>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

    <div id="id01" class="modal">

        <form class="modal-content animate" method="post">
            <div class="imgcontainer">
                <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
                <img src="img/1.jfif" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>البريد الالكترونى</b></label>
                <input type="email" placeholder="ادخل  البريد الالكترونى "  name="email" required>

                <label for="psw"><b>كلمة السر</b></label>
                <input type="password" placeholder="ادخل كلمة السر" name="password" required>

                <button type="submit" style="color: #fff;font-weight: bold" name="submit">تسجيل دخول</button>
              
            </div>

           
        </form>
    </div>

</body>

</html>