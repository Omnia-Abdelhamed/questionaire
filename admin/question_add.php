<?php
	include 'init.php';
	$select_cat_sql="SELECT * FROM titles";
	$select_cat_result=mysqli_query($connect,$select_cat_sql);
	$titles=array();
	while($cat_row=mysqli_fetch_assoc($select_cat_result)){
		$titles[]=$cat_row;
	}

	if (isset($_POST['title'])) {
		$title=$_POST['title'];
		$title_id=$_POST['cat'];
		if (!empty($title) & !empty($title_id) ) {
				$sql="INSERT INTO `questions`(`question`,`title_id`) VALUES ('$title','$title_id')";
				$result=mysqli_query($connect,$sql);
		}
	

	}
?>

<h1 class="text-center">اضافة سؤال</h1>
			<div class="container" style="direction: rtl;float: right;">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<input class="form-control" type="text" name="title" 
							 autocomplete="off" required="required">
						</div>
						<label class="col-sm-2 control-label">السؤال
						</label>
					</div>

					
					
					<div class="form-group form-group-lg">
						<div class="col-sm-10 col-md-6">
							<select name="cat" class="form-control">
								<?php foreach ($titles as $value) { ?>
									<option value="<?php echo $value['title_id']; ?>"><?php echo $value['title']; ?></option>
								<?php } ?>
							</select>
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
