<?php
	include 'init.php';

	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id=0;
	}
	$select_sql="SELECT * FROM titles WHERE title_id=$id";
	$select_result=mysqli_query($connect,$select_sql);
	$row=mysqli_fetch_assoc($select_result);

	if (isset($_POST['title'])) {
		$title=$_POST['title'];
		if (!empty($title)) {
			$update_sql="UPDATE `titles` SET `title`='$title' WHERE title_id=$id";
			$update_result=mysqli_query($connect,$update_sql);
			if($update_result){
				header("location: categories.php");
			}
		}
	}
?>

<h1 class="text-center">تعديل </h1>
			<div class="container" style="direction: rtl;float: right;">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<input class="form-control" type="text" name="title" 
							 autocomplete="off" required="required" value="<?php echo $row['title'] ?>">
						</div>
						<label class="col-sm-2 control-label">الفئة
						</label>
					</div>

					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary btn-lg" type="submit" name="add" 
							value="تعديل" style="margin-right: 622px;margin-top: 15px;width: 100px;">
						</div>
					</div>
				</form>
			</div>
