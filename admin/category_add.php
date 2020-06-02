<?php
	include 'init.php';
	if (isset($_POST['title'])) {
		$title=$_POST['title'];
		if (!empty($title)) {
				$sql="INSERT INTO `titles`(`title`) VALUES ('$title')";
				$result=mysqli_query($connect,$sql);
		}
	

	}
?>

<h1 class="text-center">اضافة فئة</h1>
			<div class="container" style="direction: rtl;float: right;">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<input class="form-control" type="text" name="title" 
							 autocomplete="off" required="required">
						</div>
						<label class="col-sm-2 control-label">الفئة
						</label>
					</div>

					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary btn-lg" type="submit" name="add" value="اضافة" style="margin-right: 622px;margin-top: 15px;width: 100px;">
						</div>
					</div>
				</form>
			</div>
