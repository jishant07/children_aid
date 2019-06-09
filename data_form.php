<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Children's Aid Society- in assiciation with Atharva Foundation</title>
<!-- Font Awesome Icons -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Theme CSS - Includes Bootstrap -->
<link href="css/creative.min.css" rel="stylesheet">
<style type="text/css">
	*
	{
		font-size: 15px;
		text-align: center;
		margin: auto;
	}
	input,select
	{
		width:100%;
		padding:10px;
	}
</style>
</head>
<body>
	<br>
	<div class="container-fluid">
		<div class="jumbotron" style="background:#fd7e14;color:white;margin:auto;">
			<h1>Add the details here.</h1>
		</div>
	</div>
	<div class="container">
		<br>
		<form>
			<div class="row">
				<div class="col-lg-3"><input type="text" name="name" placeholder="Name"></div>
				<div class="col-lg-3"><input type="text" name="file_number" placeholder="File Number"></div>
				<div class="col-lg-3"><input type="text" name="reg_number" placeholder="Register Number"></div>
				<div class="col-lg-3"><input type="number" name="aadhar_number" placeholder="Aadhar Number"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<textarea style="width:100%;" placeholder="Permanent Address"></textarea>
				</div>
				<div class="col-lg-3">
					<textarea style="width:100%;" placeholder="Local Address"></textarea>
				</div>
				<div class="col-lg-3">
					<input type="text" name="tehsil" placeholder="Tehsil">
				</div>
				<div class="col-lg-3"><input type="text" name="taluka" placeholder="Taluka">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3"><input type="text" name="village" placeholder="village"></div>
				<div class="col-lg-3">
					<input type="number" name="mob_num" placeholder="Mobile Number">
				</div>
				<div class="col-lg-3"><input type="number" name="age" placeholder="Age">
				</div>
				<div class="col-lg-3"><input type="date" name="date_of_birth" placeholder="Date of Birth"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<input type="number" name="height" placeholder="Height">
				</div>
				<div class="col-lg-3">
					<input type="number" name="weight" placeholder="Weight">
				</div>
				<div class="col-lg-3"><input type="number" name="chest" placeholder="Chest"></div>
				<div class="col-lg-3"><input type="text" name="comp" placeholder="Complexion"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<select name="eye_color">
						<option selected disabled>Select an Eye Colour</option>
						<option>Balck</option>
						<option>Brown</option>
						<option>Green</option>
						<option>Hazel</option>
						<option>Gold</option>
						<option>Other</option>
					</select>
				</div>
				<div class="col-lg-3">
					<select name="nose_type">
						<option selected disabled>Select Nose Type</option>
						<option>Turned- Up</option>
						<option>Roman</option>
						<option>Bumpy</option>
						<option>Snub</option>
						<option>Hawk</option>
						<option>Other</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="text" name="hair" placeholder="Hair">
				</div>
				<div class="col-lg-3">
					<input type="number" name="teeth" placeholder="No of Teeth">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<select name="lip_type">
						<option selected disabled>Select lips type</option>
						<option>Heart Shaped</option>
						<option>Thin</option>
						<option>Goldilocks</option>
						<option>Wide</option>
						<option>Plump</option>
						<option>Other</option>
					</select>
				</div>
				<div class="col-lg-3">
					<textarea style="width:100%" placeholder="General Condition" name="general_condition"></textarea>
				</div>
				<div class="col-lg-3">
					<input type="text" name="religion" placeholder="Religion">
				</div>
				<div class="col-lg-3">
					<input type="text" name="caste" placeholder="Caste">
				</div>
			</div>
			<br>
			<a id="add_language" style="text-align:left;float:left;">Add Language</a>
			<div class="row">
				<div class="col-lg-3">
					<input type="text" name="other_languages[]" placeholder="Other Languages">
				</div>
				<div class="col-lg-3">
					<input type="text" name="mother_tongue" placeholder="Mother Tongue">
				</div>
				<div class="col-lg-3">
					<input type="text" name="socio_economic_class" placeholder="Socio Economic Class">
				</div>
				<div class="col-lg-3">
					<select name="lit_level">
						<option>High</option>
						<option>Medium</option>
						<option>Low</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<input type="text" name="prev_school" placeholder="Previous School">
				</div>
				<div class="col-lg-3">
					<input type="text" name="child_court" placeholder="Children Court">
				</div>
				<div class="col-lg-3">
					<input type="text" name="case_no" placeholder="Case Number">
				</div>
				<div class="col-lg-3">
					<input type="text" name="case_handler" placeholder="Case Handler">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<input type="text" name="section_referral" placeholder="Section Referral">
				</div>
				<div class="col-lg-3">
					<select name="status">
						<option>CCL</option>
						<option>Child Labour</option>
						<option>Racket</option>
						<option>Others</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="date" name="date_of_custody" placeholder="Date of Custody">
				</div>
				<div class="col-lg-3">
					<input type="date" name="date_of_admission" placeholder="Date of Addmission">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					<select name="is_repeater">
						<option>Yes</option>
						<option>No</option>
						<option>Don't know</option>
					</select>
				</div>
				<div class="col-lg-3">
					<input type="date" name="date_of_discharge" placeholder="Date of Discharge">
				</div>
				<div class="col-lg-3">
					<input type="text" name="prev_institution" placeholder="Previous Institution">
				</div>
				<div class="col-lg-3">
					
				</div>
			</div>
			<br>
			<button id="add_medical_row"></button>
			<div class="row">
				<div class="col-lg-4"><h3>Medical</h3>
				<br><input type="text" name="medical[]"></div>
				<div class="col-lg-4"><h3>Psychological</h3>
				<br><input type="text" name="psychological[]"></div>
				<div class="col-lg-4"><h3>Psychiatric</h3>
				<br><input type="text" name="psychiatric[]"></div>
			</div>
			<br>
		</form>
	</div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
<script type="text/javascript">
	
</script>
</html>