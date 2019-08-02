<?php 
	require("./partials/database_credentials.php");
	$sql_count = "select * from `minimal_form_data` order by `id` desc";
	$result = $con -> query($sql_count);
	$i = 0;
	$prev_id = 0;
	if($result->num_rows)
	{
		while(($row = $result->fetch_assoc()) && ($i<1))
		{
			$prev_id = $row['id'];
			$i++;
		}
	}
	$new_id = $prev_id + 1;
	$target_dir = "./minimal_data_images/";
	$extension = explode("/", $_FILES["file"]["type"]);
	echo $extension;
    $name=$new_id."img".".".$extension[1];
	echo $name;
	move_uploaded_file($_FILES['child_photo']['tmp_name'], $target_dir);
	$data = json_encode($_POST);
	$sql = "insert into `minimal_form_data`(`added_data`) values ('$data');";
	//$con -> query($sql);
	//header("Location: minimal_data.php");
?>