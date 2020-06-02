<?php
include 'init.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=0;
}
$sql1="DELETE FROM `details` WHERE question_id=$id";
$result1=mysqli_query($connect,$sql1);
if($result1){
	$sql="DELETE FROM `questions` WHERE question_id=$id";
	$result=mysqli_query($connect,$sql);
	if($result){
		header("location: question.php");
		exit();
	}
}

