<?php
include 'connect.php';
 $sql="SELECT * FROM `student`";
 $result=mysqli_query($connect,$sql);

 $data=array();
 while ($row=mysqli_fetch_assoc($result)) {
 	$data[]=$row;
 }




?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="50%">
		<tr>
			<th>name</th>
			<th>code</th>
			<th>email</th>
			<th>control</th>
		</tr>
		<?php foreach($data as $value){ ?>
		<tr>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['code']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td>
				<a href="delete.php?id=<?php echo $value['id']; ?>">delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>