<?php 
	session_start();
	require("./partials/database_credentials.php");
	extract($_POST);
	$admin_sql = "select * from `admin_user` where username = '$user_name' and password='".md5($pwd)."';";
	$admin_result = $con->query($admin_sql);
	if($admin_result->num_rows > 0)
	{
		$_SESSION['is_admin'] = 1;
		header("Location: index.php");
	}
	$worker_sql = 
		"select * from `worker_user` where username = '$user_name' and password='".md5($pwd)."';";
	$worker_result = $con->query($worker_sql);
	if ($worker_result->num_rows>0)
	{
		$_SESSION['is_worker'] = 1;
		header("Location: index.php");
	}
 ?>