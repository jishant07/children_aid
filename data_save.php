<?php 
	require("./database_credentials.php");
	$data = json_encode($_POST);
	echo $data;
	$sql = "insert into `children_data`(`added_data`) values ('$data');";
	$con -> query($sql);
?>