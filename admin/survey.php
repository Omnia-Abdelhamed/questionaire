<?php
	include 'init.php';
	$dep_sql="SELECT * FROM `departments`";
	$dep_result=mysqli_query($connect,$dep_sql);

	$dep_data= array();

	while ($dep_row=mysqli_fetch_assoc($dep_result)) {
		$dep_data[]=$dep_row;
	}

	$grade_sql="SELECT * FROM `grade`";
	$grade_result=mysqli_query($connect,$grade_sql);

	$grade_data= array();

	while ($grade_row=mysqli_fetch_assoc($grade_result)) {
		$grade_data[]=$grade_row;
	}
?>

<h1 class="text-center"> الإستبيان </h1>
	<div class="container">
        
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="subject.php">
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">
						</label>
        
        	
        <div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<select name="dep" class="form-control">
								<?php foreach ($dep_data as $value) { ?>
									<option value="<?php echo $value['dept_id'] ?>">
										<?php echo $value['title']; ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<label class="col-sm-2 control-label">الشعبة
						</label>
					</div>
<div class="container">
        
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group form-group-lg">
						<label class="col-sm-2 control-label">
						</label>
                        
					<div class="form-group form-group-lg">
						
						<div class="col-sm-10 col-md-6">
							<select name="grade" class="form-control">
								<?php foreach ($grade_data as $value) { ?>
									<option value="<?php echo $value['grade_id'] ?>">
										<?php echo $value['title']; ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<label class="col-sm-2 control-label">الفرقة
						</label>
					</div>
            <center>
					<div class="form-group form-group-lg">
						<div class="col-sm-offset-2 col-sm-10">
							<input class="btn btn-primary btn-lg" type="submit" name="add" 
							value="دخول" style="margin-right: 290px;margin-top: 15px;width: 100px;">
                               </center>
						</div>
					</div>
				</form>
			</div>
