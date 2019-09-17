<?php 
	session_start();
	require("./partials/database_credentials.php");
	$sql_count = "select * from `registration`";
	$result = $con -> query($sql_count);
	$row = mysqli_num_rows ($result);
	$new_id = $row + 1;
	if (!empty($_FILES['child_photo']))
	{
		if (($_FILES['child_photo']['type'] == 'image/jpeg') || ($_FILES['child_photo']['type'] == 'image/jpg') || ($_FILES['child_photo']['type'] == 'image/png')) 
		{
			if ($_FILES['child_photo']['size']/1024 < 2024)
			{
				$target_dir = "pimage/";
				$target_file = $target_dir . $new_id . "img.jpg";
				$image_name = $new_id . "img.jpg";
				move_uploaded_file($_FILES['child_photo']['tmp_name'], $target_file);
				extract($_POST);
				$sql = "INSERT INTO `registration`(`pimage`, `NameJuvenile`, `fileNo`, `missingChildNo`, `adharCardNo`, `localaddress`, `permentaddress`, `village`, `postofffice`, `taluka`, `Tashil`, `District`, `state`, `mobileNo`, `age`, `dateofbirth`, `hight`, `waight`, `chest`, `eyes`, `hair`, `childrenCourt`, `caseNo`, `PoliceSatation`, `FIR`, `dateAdmission`, `datedischarge`, `fatherName`, `motherName`, `observation`, `persentProblem`, `AggarvatingCircumstances`, `dept_id`) VALUES ('$image_name','$NameJuvenile','$fileNo','$missingChildNo','$adharCardNo','$localaddress','$permentaddress','$village','$postofffice','$taluka','$Tashil','$District','$state','$mobileNo','$age','$dateofbirth','$hight','$waight','$chest','$eyes','$hair','$childrenCourt','$caseNo','$PoliceSatation','$FIR','$dateAdmission','$datedischarge','$fatherName','$motherName','$observation','$persentProblem','$AggarvatingCircumstances','$dept_id')";
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