<?php 
session_start();
if (isset($_SESSION['file_error']) && $_SESSION['file_error'] == 1)
{
	?>
   	<script type="text/javascript">
   		alert("Some error occured");
   	</script>
	<?php
	$_SESSION['file_error'] = 0;
}
if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
{$admin = 1;}
else if(isset($_SESSION['is_worker']) && $_SESSION['is_worker'])
{header("Location: login.php");}
else
{
 header("Location: login.php");
}
?>
<?php include './partials/header.php'; ?>
<style type="text/css">
	a
	{
		height:auto;
		background: white;
		color:black;
		border:#fd7e14 2px solid;
		border-radius: 10px;
		padding:10px;
	}
	a:hover 
	{
		color:red !important;
		background:#ff6a26;
		color:white !important;
		transition: 0.3s;
	}
</style>
<body>
	<div style="padding-top: 130px;"></div>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<button id="part1_button" class="btn btn-info">Basic Information</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<button id="part2_button" class="btn btn-info">Appearance Details</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<button id="part3_button" class="btn btn-info">Schooling & Court</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2"><button id="part4_button" class="btn btn-info">Health & Misc.</button></div>
		</div>
	</div>
	<!-- Main Page -->
	<div id="main" style="margin: auto;position: relative;">
	<!-- Part 1 Starts -->
	<form method="post" action="data_save.php" enctype="multipart/form-data">
	<div class="container" id="part1">
		<br>
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12 mb-2" style="border: 1px solid orange;width:100%;">
				<span style="display:flex;">Upload a Photo of the Juvenile
				<input type="file" name="child_photo" required></span>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
				<input type="text" name="name" placeholder="Name">
			</div>
		</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2"><input type="text" name="file_number" placeholder="File Number"></div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2"><input type="text" name="reg_number" placeholder="Register Number"></div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2"><input type="number" name="aadhar_number" placeholder="Aadhar Number"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<textarea style="width:100%;" name="perm_add" placeholder="Permanent Address"></textarea>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<textarea style="width:100%;" name="loc_add" placeholder="Local Address"></textarea>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="tehsil" placeholder="Tehsil">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="branch" placeholder="Branch">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2"><input type="text" name="village" placeholder="village"></div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="number" name="mob_num" placeholder="Mobile Number">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2"><input type="number" name="age" placeholder="Age">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">Date of Birth<input type="date" name="date_of_birth"></div>
			</div>
			<br>
			<br>
			<h4>You can submit or fill up other parts</h4>
				<button class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>
	<!-- Part 1 Ends -->

	<!-- Part 2 Startes -->
	<div class="container" id="part2" style="display:none;">
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="number" name="height" placeholder="Height">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="number" name="weight" placeholder="Weight">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2"><input type="number" name="chest" placeholder="Chest"></div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2"><input type="text" name="comp" placeholder="Complexion"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
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
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
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
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="hair" placeholder="Hair">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="number" name="teeth" placeholder="No of Teeth">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
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
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<textarea style="width:100%" placeholder="General Condition" name="general_condition"></textarea>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="religion" placeholder="Religion">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="caste" placeholder="Caste">
				</div>
			</div>
			<br>
			<br>
			<br>
			<h4>You can submit or fill up other parts</h4>
				<button class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>
	<!-- Part 2 Ends -->

	<!-- Part 3 Starts -->
	<div class="container" id="part3" style="display:none;">
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<a id="add_language">Add Language</a>
					<br>
					<br>
					<div id="language_div"></div>
					<br>
					<a id="remove_language">Remove Language</a>
					<br>
					<br>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="mother_tongue" placeholder="Mother Tongue">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="socio_economic_class" placeholder="Socio Economic Class">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<label>Literacy level</label>
					<select name="lit_level" placeholder="Literacy Level">
						<option selected disabled>Select Literacy Level</option>
						<option>High</option>
						<option>Medium</option>
						<option>Low</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="prev_school" placeholder="Previous School">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="child_court" placeholder="Children Court">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="case_no" placeholder="Case Number">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="case_handler" placeholder="Case Handler">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="section_referral" placeholder="Section Referral">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<select name="status">
						<option disabled selected>Select child status</option>
						<option>CCL</option>
						<option>Child Labour</option>
						<option>Racket</option>
						<option>Others</option>
					</select>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					Date of Custody
					<input type="date" name="date_of_custody" placeholder="Date of Custody">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					Date of Addmission
					<input type="date" name="date_of_admission" placeholder="Date of Addmission">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<select name="is_repeater">
						<option selected disabled>Select repeater status</option>
						<option>Yes</option>
						<option>No</option>
						<option>Don't know</option>
					</select>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					Date of Discharge <input type="date" name="date_of_discharge" placeholder="Date of Discharge">
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
					<input type="text" name="prev_institution" placeholder="Previous Institution">
				</div>
			</div>
			<br>
			<h4>You can submit or fill up other parts</h4>
				<button class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
			<br>
			<br>
		</div>
		<!-- Part 3 Ends -->

		<!-- Part 4 Starts -->
		<div class="container" id="part4" style="display: none;">
			<br>
			<br>
			<div class="row">
				<div class="col-lg-1">
					<a id="add_mediacal_details" style="text-align:left;float:left;">Add</a>
				</div>
				<div class="col-lg-3" id="medical"><h3>Medical</h3>
				<br>
				</div>
				<div class="col-lg-3" id="psychological"><h3>Psychological</h3>
				<br>
				</div>
				<div class="col-lg-3" id="psychiatric"><h3>Psychiatric</h3>
				<br>
				</div>
				<div class="col-lg-2" style="width:100%">
					<span id='rem_medical_det'><a style="text-align:right;float:right;">Remove</a></span>
				</div>
			</div>
			<br>
			<br>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<textarea name="nature_dod" placeholder="Nature and Date of Disposal"></textarea>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<textarea name="observation" placeholder="Observation"></textarea>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<textarea name="pre_problem" placeholder="Present Problem"></textarea>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2">
				<textarea name="agg_cir" placeholder="Aggravating Circumstances"></textarea>
			</div>
			<br>
			<button class="btn btn-primary" value="Submit">Submit</button>
			<br>
			<br>
		</div>
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
	$(document).ready(function()
	{
    	function hide_all()
    	{
    		$('#part1').fadeOut("fast")
    		$('#part2').fadeOut("fast")
    		$('#part3').fadeOut("fast")
    		$('#part4').fadeOut("fast")
    	}
    	$("#part1_button").on("click",function()
    	{
    		hide_all();
    		$('#part1').fadeIn("slow");
    	});
    	$("#part2_button").on("click",function()
    	{
    		hide_all();
    		$('#part2').fadeIn("slow");
    	});
    	$("#part3_button").on("click",function()
    	{
    		hide_all();
    		$('#part3').fadeIn("slow");
    	});
    	$("#part4_button").on("click",function()
    	{
    		hide_all();
    		$('#part4').fadeIn("slow");
    	});
		var med_count = $('#medical').length;
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
		var language_count = $('#language').length;
		$("#add_language").on("click",function()
		{
			language_count++;
			$("#language_div").append("<input type='text' name='other_languages[]' placeholder='Language' id='language_"+language_count+"'"+">");
			console.log("From the add_language thing", language_count);
		});
		$("#remove_language").on("click",function()
		{
			var rem = "#language_"+(language_count);
			$(rem).each(function()
			{
				$(this).fadeOut(300,function()
				{
					$(this).remove();
				});
			});
			language_count--;
		});
	});
</script>
</html>