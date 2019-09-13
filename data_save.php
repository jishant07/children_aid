<?php 
	session_start();
	require("./partials/database_credentials.php");
	$sql_count = "select * from `children_data` order by `id` desc";
	$result = $con -> query($sql_count);
	$row = mysqli_num_rows ($result);
	$new_id = $row + 1;
	if (!empty($_FILES['child_photo']))
	{
		if (($_FILES['child_photo']['type'] == 'image/jpeg') || ($_FILES['child_photo']['type'] == 'image/jpg') || ($_FILES['child_photo']['type'] == 'image/png')) 
		{
			if ($_FILES['child_photo']['size']/1024 < 2024)
			{
				$target_dir = "data_images/";
				$target_file = $target_dir . $new_id . "img.jpg";
				move_uploaded_file($_FILES['child_photo']['tmp_name'], $target_file);
				$data = json_encode($_POST);
				$sql = "insert into `children_data`(`added_data`,`photo_link`) values ('$data','$target_file');";
				$con -> query($sql);
				$_SESSION['file_error'] = 0;
				$_SESSION['is_success'] = 1;
				header("Location: retrive_data.php");
			}
			else
			{
				$_SESSION['file_error'] = 1;
				echo "SIZE ERROR";
				header("Location: data_form.php");
			}
		}
		else
		{
			$_SESSION['file_error'] = 1;
			echo "TYPE ERROR";
			header("Location: data_form.php");
		}
	}
	else
	{
		$_SESSION['file_error'] = 1;
		echo "FILE NOT EXIST";
		header("Location: data_form.php");
	}
?>