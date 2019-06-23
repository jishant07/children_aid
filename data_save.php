<?php 
	require("./partials/database_credentials.php");
	$data = json_encode($_POST);
	$sql = "insert into `children_data`(`added_data`) values ('$data');";
	$con -> query($sql);
	header("Location: retrive_data.php");
?>