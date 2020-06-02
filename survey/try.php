<?php

$sub_id=2;
$std_id=2;
$connect=mysqli_connect('localhost','root','','survey');
$connect->set_charset('utf8');
$is_exist_sql="SELECT * FROM result WHERE subject_id='$sub_id' AND std_id='$std_id'";
    $is_exist_sql_result=mysqli_query($connect,$is_exist_sql);
    $std_num=mysqli_num_rows($is_exist_sql_result);

    echo $std_num;