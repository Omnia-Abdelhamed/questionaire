<?php
	include 'init.php';

	$sql=" SELECT * FROM `questions` ORDER BY title_id";
$result=mysqli_query($connect,$sql);
$data=array();
while ($row=mysqli_fetch_assoc($result)) {
	$data[]=$row;
}

$count=1;
?>
<style type="text/css">
	body{
		direction: rtl;
	}
</style>
<h1 class="text-center">السؤال</h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>مsdfs</th>
						<th>العنوان</th>
						<th>الفئة</th>
						<th>التحكم</th>
					</tr>
				<?php foreach ($data as$value) { 
					$title_id=$value['title_id'];
					$select_title="SELECT * FROM titles WHERE title_id='$title_id'";
					$select_title_result=mysqli_query($connect,$select_title);
					$row_title=mysqli_fetch_assoc($select_title_result);
				?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $value['question']; ?></td>
						<td><?php echo $row_title['title']; ?></td>
						<td>
							<a href="question_edit.php?id=<?php echo $value['question_id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i>
								تعديل
							</a>
							<a href="question_delete.php?id=<?php echo $value['question_id']; ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								حذف</a>
					
						</td>
					</tr>
					<?php  $count++; } ?>
				</table>
			</div>
			<a href='question_add.php' class="btn btn-primary">
				<i class="fa fa-plus"> </i>  اضافة سؤال </a>