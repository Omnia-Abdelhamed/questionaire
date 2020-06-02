<?php
	include 'connect.php';
// 	$sql=" SELECT * FROM `questions` GROUP BY title_id";
// $result=mysqli_query($connect,$sql);
// $data=array();
// while ($row=mysqli_fetch_assoc($result)) {
// 	$data[]=$row;
// }

// print_r($data)

	$cat_sql=" SELECT title_id FROM `titles`";
	$cat_result=mysqli_query($connect,$cat_sql);
	$cat_data=array();
	while ($cat_row=mysqli_fetch_assoc($cat_result)) {
		$cat_data[]=$cat_row;
	}
	print_r($cat_data);


?>