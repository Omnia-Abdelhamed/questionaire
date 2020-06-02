<?php
	include 'init.php';
	$sql=" SELECT * FROM `questions`";
$result=mysqli_query($connect,$sql);
$data=array();
while ($row=mysqli_fetch_assoc($result)) {
	$data[]=$row;
}


?>
<style type="text/css">
	body{
		direction: rtl;
	}
</style>
<h1 class="text-center">بحث</h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>م</th>
						<th>العنوان</th>
						<th>الفئة</th>
						<th>التحكم</th>
					</tr>
				<?php foreach ($data as$value) { ?>
					<tr>
						<td></td>
						<td><?php echo $value['search']; ?></td>
						<td><?php echo $value['title_id']; ?></td>
						<td>
							<a href="question_edit.php" class="btn btn-success"><i class="fa fa-edit"></i>
								تعديل
							</a>
							<a href="#" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								حذف</a>
					
						</td>
					</tr>
<?php }