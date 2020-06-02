<?php
	include 'init.php';
	$sql=" SELECT * FROM `titles` ORDER BY title_id";
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
<h1 class="text-center"> الفئات </h1>
		<div class="container">
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>م</th>
						<th> اسم الفئة </th>
						<th> التحكم </th>
				</tr>
				
                    <?php foreach ($data as$value) { ?>
				
                    <tr>
                     <td><?php echo $count; ?></td>
					 	<td><?php echo $value['title']; ?></td>
					
                        
						<td>
                            	
							<a href="category_edit.php?id=<?php echo $value['title_id']; ?>" class="btn btn-success"><i class="fa fa-edit"></i>
								تعديل
							</a>
							<a href="category_delete.php?id=<?php echo $value['title_id']; ?>" class="btn btn-danger confirm"><i class="fa fa-close"></i>
								حذف </a>
					
						</td>
					</tr>

					<?php  $count++;} ?>
                   
				</table>
			</div>
			<a href='category_add.php' class="btn btn-primary">
				<i class="fa fa-plus"> </i> اضافة فئة </a>
            