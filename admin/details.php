<?php
	include 'init.php';
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id=0;
	}
	$select_sql="SELECT * FROM subjects WHERE subject_id=$id";
	$select_result=mysqli_query($connect,$select_sql);
	$row=mysqli_fetch_assoc($select_result);

	$cat_sql=" SELECT * FROM `titles` ORDER BY title_id";
	$cat_result=mysqli_query($connect,$cat_sql);
	$cat_data=array();
	while ($cat_row=mysqli_fetch_assoc($cat_result)) {
		$cat_data[]=$cat_row;
	}

	function get_val($qu_id,$val){
		global $id;
		global $connect;

		$num_answer_sql="SELECT * FROM details WHERE subject_id='$id' AND question_id='$qu_id'";
		$num_answer_sql_result=mysqli_query($connect,$num_answer_sql);
		$num_answer_rows=mysqli_num_rows($num_answer_sql_result);

		$num_answer_val="SELECT * FROM details WHERE subject_id='$id' AND question_id='$qu_id' AND answer='$val'";
		$num_answer_val_result=mysqli_query($connect,$num_answer_val);
		$num_answer_val_rows=mysqli_num_rows($num_answer_val_result);

		if ($num_answer_rows==0) {
			$num_answer_rows=1;
		}

		$ratio=$num_answer_val_rows/$num_answer_rows;

		return round($ratio*100,3);
	}

?>
<style type="text/css">
	body{
		direction: rtl;
	} </style>
<h1 class="text-center">تفاصيل مادة : <?php echo $row['name']; ?></h1>
		<div class="container">
        
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
				<!-- 	<tr>
						<th>م</th>
						<th>المادة</th>
						<th>الكود</th>
						<th>عدد الطلاب</th>
						<th>الفئة</th>
						<th>تقييم الفئة</th>
                        <th>تقييم المادة</th>
                        <th> التفاصيل </th>
					</tr> -->
				<?php $title_count=1; foreach ($cat_data as $cat_value) { 
					$title_id=$cat_value['title_id'];
					$qu_sql="SELECT * FROM questions WHERE title_id='$title_id'";
					$qu_sql_result=mysqli_query($connect,$qu_sql);

					$qu_data= array();
					while ($qu_row=mysqli_fetch_assoc($qu_sql_result)) {
						$qu_data[]=$qu_row;
					}
				?>
					<tr>
						<th><?php echo $title_count; ?></th>
						<th><?php echo $cat_value['title']; ?></th>
						<td style="background-color: #f9f5f5;">أوافق بشدة</td>
						<td style="background-color: #f9f5f5;">أوافق </td>
						<td style="background-color: #f9f5f5;">محايد</td>
						<td style="background-color: #f9f5f5;">لا أوافق </td>
						<td style="background-color: #f9f5f5;">لا أوافق تماما</td>
					</tr>
					<?php $qu_count=1; foreach ($qu_data as $qu_value) { ?>
						<tr>
							<td><?php echo $title_count.".".$qu_count; ?></td>
							<td><?php echo $qu_value['question']; ?></td>
							<td><?php echo get_val($qu_value['question_id'],5); ?></td>
							<td><?php echo get_val($qu_value['question_id'],4); ?></td>
							<td><?php echo get_val($qu_value['question_id'],3); ?></td>
							<td><?php echo get_val($qu_value['question_id'],2); ?></td>
							<td><?php echo get_val($qu_value['question_id'],1); ?></td>
						</tr>
					<?php $qu_count++; } ?>
				<?php $title_count++; } ?>
				</table>
			</div>
			