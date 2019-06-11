<?php 
	$servername = "localhost";
	$db_name = "children_aid";
	$user = "root";
	$pwd = "";
	$con = mysqli_connect($servername, $user, $pwd, $db_name);
	$data = json_encode($_POST);
	echo json_encode($_POST);
	$sql = "insert into `children_data`(`added_data`) values ('$data');";
	$con -> query($sql);
?>