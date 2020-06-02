<?php
	include 'init.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$dep=$_POST['dep'];
		$grade=$_POST['grade'];
		$sql="SELECT * FROM subjects WHERE grade_id='$grade' AND dept_id='$dep'";
		$result=mysqli_query($connect,$sql);

		$subject_data= array();
		while ($subject_row=mysqli_fetch_assoc($result)) {
			$subject_data[]=$subject_row;
		}
	}else{
		header("location: survey.php");
		exit();
	}

	$count=1;

?>
<style type="text/css">
	body{
		direction: rtl;
	} </style>
<h1 class="text-center"> تقييم المواد</h1>
		<div class="container">
        
			<div class="table-responsive">
				<table class="main-table text-center table table-bordered">
					<tr>
						<th>م</th>
						<th>المادة</th>
						<th>الكود</th>
						<th>عدد الطلاب</th>
						<!-- <th>الفئة</th>
						<th>تقييم الفئة</th> -->
                        <th>تقييم المادة</th>
                        <th> التفاصيل </th>
					</tr>
				<?php foreach ($subject_data as $value) { 
					$sub_id=$value['subject_id'];
					$answer_sql="SELECT * FROM result WHERE subject_id='$sub_id'";
					$answer_sql_result=mysqli_query($connect,$answer_sql);

					$num_rows=mysqli_num_rows($answer_sql_result);

					$subject_ans_data= array();
					while ($subject_ans_row=mysqli_fetch_assoc($answer_sql_result)) {
						$subject_ans_data[]=$subject_ans_row;
					}

					$sum=0;
					foreach ($subject_ans_data as $ans_value) {
						$sum=$sum+$ans_value['answer'];
					}
					if ($num_rows!= 0) {
						$total_result=$sum/$num_rows;
					}
				?>
					<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['subject_code']; ?></td>
                        <td><?php echo $num_rows; ?></td>
						<td><?php if ($num_rows!= 0) { echo round($total_result,2)."%"; }else{
							echo "لا يوجد ";}?></td>
							<td>
								<a href="details.php?id=<?php echo $sub_id; ?>" class="btn btn-success"><i class="fa fa-edit"></i>
								عرض التفاصيل 
								</a>
							</td>
					</tr>
				<?php $count++; } ?>
				</table>
			</div>
			