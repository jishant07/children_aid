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
	.container
	{
		width:80% !important;
	}
	a
	{
		height:auto;
		background: red;
		color:black !important;
		padding:10px;
	}
	a:hover 
	{
		color:red !important;
		background:black;
		transition: 0.3s;
	}
</style>
</head>
<body>
	<br>
	<div class="container-fluid" id="banner" style="display: none;">
		<div class="jumbotron" style="background:#fd7e14;color:white;margin:auto;">
			<h1>Add the details here.</h1>
		</div>
	</div>
	<br>
	<!-- Loading Screen -->
	<div class="container">
		<div id="loading">
			<img src="./img/loader.gif">	
		</div>
	</div>
	<!-- Main Page -->
	<div id="main" style="display: none;">
	<!-- Part 1 Starts -->
	<form method="post" action="data_save.php">
	<div class="container" id="part1">
		<br>
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
				<div class="col-lg-3">Date of Birth<input type="date" name="date_of_birth"></div>
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
						<option value="Black">Balck</option>
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
			<a id="show_part_2">Show Part 2</a>
			<br>
	</div>
	<!-- Part 1 Ends -->

	<!-- Part 2 Startes -->
	<div class="container" id="part2" style="display:none;">
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
			<div class="row">
				<div class="col-lg-3">
					<a id="add_language" style="text-align:left;float:left;">Add Language</a>
					<input type="text" name="other_languages[]" placeholder="Other Languages">
				</div>
				<div class="col-lg-3">
					<input type="text" name="mother_tongue" placeholder="Mother Tongue">
				</div>
				<div class="col-lg-3">
					<input type="text" name="socio_economic_class" placeholder="Socio Economic Class">
				</div>
				<div class="col-lg-3">
					<label>Literacy level</label>
					<select name="lit_level" placeholder="Literacy Level">
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
					Date of Custody<input type="date" name="date_of_custody" placeholder="Date of Custody">
				</div>
				<div class="col-lg-3">
					Date of Addmission<input type="date" name="date_of_admission" placeholder="Date of Addmission">
				</div>
			</div>
			<br>
			<a id="show_part_3">Show Part 3</a>
	</div>
	<!-- Part 2 Ends -->

	<!-- Part 3 Starts -->
	<div class="container" id="part3" style="display:none;">
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
					Date of Discharge <input type="date" name="date_of_discharge" placeholder="Date of Discharge">
				</div>
				<div class="col-lg-3">
					<input type="text" name="prev_institution" placeholder="Previous Institution">
				</div>
				<div class="col-lg-3">
					
				</div>
			</div>
			<br>
			<a id="add_mediacal_details" style="text-align:left;float:left;">Add</a>
			<br>
			<br>
			<div class="row">
				<div class="col-lg-4" id="medical"><h3>Medical</h3>
				<br>
				</div>
				<div class="col-lg-4" id="psychological"><h3>Psychological</h3>
				<br>
				</div>
				<div class="col-lg-4" id="psychiatric"><h3>Psychiatric</h3>
				<br>
				</div>
			</div>
			<span id='rem_medical_det'><a style="text-align:right;float:right;">Remove</a></span>
			<br>
			<br>
			<a id="show_part_4">Show Part 4</a>
		</div>
		<!-- Part 3 Ends -->

		<!-- Part 4 Starts -->
		<div class="container" id="part4" style="display: none;">
			<br>
			<div class="col-lg-3">
				<textarea name="nature_dod" placeholder="Nature and Date of Disposal"></textarea>
			</div>
			<div class="col-lg-3">
				<textarea name="observation" placeholder="Observation"></textarea>
			</div>
			<div class="col-lg-3">
				<textarea name="pre_problem" placeholder="Present Problem"></textarea>
			</div>
			<div class="col-lg-3">
				<textarea name="agg_cir" placeholder="Aggravating Circumstances"></textarea>
			</div>
			<br>
			<br>
			<button value="Submit">Submit</button>
		</div>
	</form>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
<script type="text/javascript">
	var med_count = $('#medical').length;
	$(document).ready(function()
	{
		setTimeout(function() {
    		$('#loading').fadeOut("fast",function()
    		{
    			$('#main').fadeIn("fast","swing");
    			$('#banner').fadeIn("fast","swing");
    		});
    	}, 1000);
	});
	$('#show_part_2').on("click",function()
	{
		$('#main').fadeOut("fast",function()
		{
			$('#loading').fadeIn("fast",function()
			{
					setTimeout(function() {
    				$('#loading').fadeOut("fast",function()
    				{
						$('#part1').fadeOut("fast",function()
						{
							$('#part2').fadeIn("fast",function()
							{
								$('#main').fadeIn("fast","swing");
							});
						});   			
    				});
    			}, 300);
			})
		})
	});
	$('#show_part_3').on("click",function()
	{
		$('#main').fadeOut("fast",function()
		{
			$('#loading').fadeIn("fast",function()
			{
					setTimeout(function() {
    				$('#loading').fadeOut("fast",function()
    				{
						$('#part2').fadeOut("fast",function()
						{
							$('#part3').fadeIn("fast",function()
							{
								$('#main').fadeIn("fast","swing");
							});
						});   			
    				});
    			}, 300);
			})
		})
	});
	$('#show_part_4').on("click",function()
	{
		$('#main').fadeOut("fast",function()
		{
			$('#loading').fadeIn("fast",function()
			{
					setTimeout(function() {
    				$('#loading').fadeOut("fast",function()
    				{
						$('#part3').fadeOut("fast",function()
						{
							$('#part4').fadeIn("fast",function()
							{
								$('#main').fadeIn("fast","swing");
							});
						});   			
    				});
    			}, 300);
			})
		})
	});
	$("#add_mediacal_details").on("click",function()
	{
		med_count++;
		$('#medical').append("<br class='med_"+med_count+"'><input type='text' class='med_"+med_count+"' name='medical[]'>");
		$('#psychological').append("<br class='med_"+med_count+"'><input type='text' class='med_"+med_count+"' name='psychological[]'>");
		$('#psychiatric').append("<br class='med_"+med_count+"'><input type='text' class='med_"+med_count+"' name='psychiatric[]'>");
	});
	$(document).on("click","#rem_medical_det",function()
	{
		var str = ".med_"+(med_count);
		$(str).each(function()
		{
			$(this).fadeOut(300,function()
			{
				$(this).remove();
			});
		});
		med_count--;
	});
</script>
</html>