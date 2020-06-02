<?php
include 'init.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=0;
}

// $detail_sql="DELETE FROM `details` WHERE question_id=$id";
// $detail_result=mysqli_query($connect,$detail_sql);

$sql="DELETE FROM `questions` WHERE title_id=$id";
$result=mysqli_query($connect,$sql);
if($result){
	$title_sql="DELETE FROM `titles` WHERE title_id=$id";
	$title_result=mysqli_query($connect,$title_sql);
	if ($title_result) {
		header("location: categories.php");
		exit();
	}
}