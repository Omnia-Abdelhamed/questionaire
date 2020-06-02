<?php
	include 'init.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id=0;
	}
	$select_sql="SELECT * FROM questions WHERE question_id=$id";
	$select_result=mysqli_query($connect,$select_sql);
	$row=mysqli_fetch_assoc($select_result);
	if(isset($_POST['title'])){
		$title=$_POST['title'];
		$cat=$_POST['cat'];
		if(!empty($title) & !empty($cat)){
			$update_sql="UPDATE `questions` SET `question`='$title',`title_id`='$cat' WHERE question_id=$id";
			$update_result=mysqli_query($connect,$update_sql);
			if($update_result){
				header("location: question.php");
			}
		}
	}
?>

<h1 class="text-center">تعديل سؤال </h1>
			<div class="container" style="direction: rtl;float: right;">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<input class="form-control" type="text" name="title" 
							 autocomplete="off" required="required" 
							 value="<?php echo $row['question'] ?>">
						</div>
						<label class="col-sm-2 control-label">العنوان
						</label>
					</div>

					
					
					<div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<select name="cat" class="form-control">
								<?php 
									$dep_id=$row['title_id'];
									$dep_select="SELECT * FROM titles WHERE title_id='$dep_id'";
									$dep_result=mysqli_query($connect,$dep_select);
									$dep_row=mysqli_fetch_assoc($dep_result);
								?>
									<option value="<?php echo $dep_row['title_id']; ?>"><?php echo $dep_row['title']; ?></option>

									<?php 
									$alldep_select="SELECT * FROM titles WHERE title_id !='$title_id'";
									$alldep_result=mysqli_query($connect,$alldep_select);
									$alldep_data=array();
									while($alldep_row=mysqli_fetch_assoc($alldep_result)){
										$alldep_data[]=$alldep_row;
									}
									
								 foreach ($alldep_data as $key => $alldep) { ?>
									<option value="<?php echo $alldep['title_id']; ?>"><?php echo $alldep['title']; ?></option>
								<?php } ?>
							</select>
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
