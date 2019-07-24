<?php 
	require("./partials/database_credentials.php");
	$data = json_encode($_POST);
	$sql = "insert into `minimal_form_data`(`added_data`) values ('$data');";
	$con -> query($sql);
	header("Location: minimal_data.php");
?>