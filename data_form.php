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
	body{
		
  background:url("2011.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
   }
</style>
<body>
	<div style="background:rgba(0,0,0,0.4);">
	<div style="padding-top: 20px;"></div>
	<br>
	<br>
	<div class="container" style="padding-bottom: 30px;" >
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part1_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue">Basic Information</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part2_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue">Appearance Details</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part3_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue" >Schooling & Court</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part4_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue">Health & Misc.</button>
				</div>
		</div>
	</div>
	<!-- Main Page -->
	<div id="main" style="margin: auto;position: relative;" >
	<!-- Part 1 Starts --> 
	<form method="post" action="data_save.php" enctype="multipart/form-data" >
	<div class="container" id="part1" style="border:0.5px solid black;">
		<br>
		<div class="row" style="padding-left: 10px;">
			<div class="col-lg-4 col-sm-12 col-xs-12 mb-1" style="border: 1px solid orange;width:50%;">
				<label style="display:flex;color:orange;">Upload a Photo of the Juvenile:</label>
				<input type="file" style="color:orange;" name="child_photo" required></span>
			</div>
		</div>
		<hr style="border:0.5px solid lightgrey;">
        <br>
		<div class="row">
			<div class="col-lg-4 col-sm-2 col-xs-12 mb-2" >
				<label for="Name" style="color:orange;">Name:</label>
                <input id="Name" type="text" placeholder="John" style="background-color:rgb(250, 239, 207);" name="name">
            </div>

            <div class="col-lg-4 col-sm-2 col-xs-12 mb-2" >
                <label for="Age" style="color:orange;">Age:</label>
                <input id="Age" type="text" placeholder="10" style="background-color:rgb(250, 239, 207);"  name="age">
            </div>

            <div class="col-lg-4 col-sm-2 col-xs-12 mb-2" >
                <label for="DOB" style="color:orange;">Date of Birth:</label>
                <input id="DOB" type="date" placeholder="12/4/1999" pattern={(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}} style="background-color:rgb(250, 239, 207);" name="date_of_birth"	>
            </div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-2 col-xs-12 mb-2" >
				<label for="Phone" style="color:orange;">Mobile number:</label>
                <input id="Phone" type="text" style="background-color:rgb(250, 239, 207);" name="mob_num"  >
            </div>
        </div>
		<hr style="border:0.5px solid lightgrey;">
		<br>
		<br>

			<div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
				<label for="FNo" style="color:orange;">File number:</label>
                <input id="FNo" type="text" style="background-color:rgb(250, 239, 207);" name="file_number"  >
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2">
                <label for="RNo" style="color:orange;">Register number:</label>
                <input id="RNo" type="text" style="background-color:rgb(250, 239, 207);"  name="reg_number" >
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2">
                <label for="UID" style="color:orange;">Aadhar number:</label>
                <input id="UID" type="text" placeholder="XXXX-XXXX-XXXX" pattern={[0-9]{4}.[0-9]{4}.[0-9]{4}} style="background-color:rgb(250, 239, 207);" name="aadhar_number" >
            </div>
		</div> 
        <hr style="border:0.5px solid lightgrey;">
        <br>
        
        <br>
		<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="P_addr" style="color:orange;">Permanent Address:</label>
					<textarea id="P_addr"style="width:100%;" name="perm_add" style="background-color:rgb(250, 239, 207);"></textarea>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="L_addr" style="color:orange;">Local Address:</label>
					<textarea  id="L_addr"style="width:100%;" name="loc_add" style="background-color:rgb(250, 239, 207);" ></textarea>
				</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
				<label for="Tehsil" style="color:orange;">Tehsil:</label>
                <input id="Tehsil" type="text" name="tehsil" style="background-color:rgb(250, 239, 207);"   >
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
                <label for="Branch" style="color:orange;">Branch:</label>
                <input id="Branch" type="text" name="branch" style="background-color:rgb(250, 239, 207);"  >
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
                <label for="Village" style="color:orange;">Village:</label>
                <input id="Village" type="text" name="village" style="background-color:rgb(250, 239, 207);"  >
            </div>
           </div>
            
            <hr style="border:0.5px solid lightgrey;">
			<br>
			<br>
			<h3 style="color: white">You can submit or fill up other parts</h3>
				<button style="margin:0 50%;padding: 10px 30px;" class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>
	<!-- Part 1 Ends -->

	<!-- Part 2 Startes -->
	<div class="container" id="part2" style="display:none; border:0.5px solid black">

			<br>
			<div class="row">
				 <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
	            	<label for="rel"  style="color:orange;">Religion:</label>
					<input id="rel" type="text" name="religion" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="caste"  style="color:orange;">Caste:</label>
					<input id="caste" type="text" name="caste" style="background-color:rgb(250, 239, 207);" >
				</div>
			
			
			<br>
			 <hr style="border:0.5px solid lightgrey;">
			<div class="row" style="padding-left: 15px">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
			    		<label for="hair"  style="color:orange;">Hair:</label>
					    <input id="hair" type="text" name="hair" placeholder="wavy" style="background-color:rgb(250, 239, 207);">
				    </div>
				    <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
				    	<label for="comp"  style="color:orange;">Complexion:</label>
				    	<input id="comp" type="text" name="comp" placeholder="dark" style="background-color:rgb(250, 239, 207);">
				    </div>
				</div>
			</div>	
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-4 col-xs-6 mb-2">
					<label for="eye_color"  style="color:orange;">Eyes:</label>
					<select id="eye_color" name="eye_color" style="background-color:rgb(250, 239, 207);">
						<option selected disabled>Select an Eye Colour</option>
						<option value="Black">Balck</option>
						<option>Brown</option>
						<option>Green</option>
						<option>Hazel</option>
						<option>Gold</option>
						<option>Other</option>
					</select>
				</div>
				<div class="col-lg-3 col-sm-4 col-xs-6 mb-2">
					<label for="nose_type"  style="color:orange;">Noes:</label>
					<select id="nose_type" name="nose_type" style="background-color:rgb(250, 239, 207);">
						<option selected disabled>Select Nose Type</option>
						<option>Turned- Up</option>
						<option>Roman</option>
						<option>Bumpy</option>
						<option>Snub</option>
						<option>Hawk</option>
						<option>Other</option>
					</select>
				</div>
				<div class="col-lg-3 col-sm-4 col-xs-6 mb-2">
					<label for="lip_type"  style="color:orange;">Lips</label>
					<select id="lip_type" name="lip_type" style="background-color:rgb(250, 239, 207);">
						<option selected disabled>Select lips type</option>
						<option>Heart Shaped</option>
						<option>Thin</option>
						<option>Goldilocks</option>
						<option>Wide</option>
						<option>Plump</option>
						<option>Other</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
					   <label for="Height"  style="color:orange;">Height:</label>
					   <input id="Height" type="number" name="height" style="background-color:rgb(250, 239, 207);">
				    </div>
				    <div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
				        <label for="Wight"  style="color:orange;">Weight:</label>
					    <input id="Weight"type="number" name="weight" style="background-color:rgb(250, 239, 207);" >
					</div>
				
				
				
					<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
						<label for="chest"  style="color:orange;">Chest:</label>
						<input id="chest" type="number" name="chest" style="background-color:rgb(250, 239, 207);" >
					</div>
				    <div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
				    	<label for="teeth"  style="color:orange;">No.of teeth:</label>
                        <input id="teeth" type="number" name="teeth" style="background-color:rgb(250, 239, 207);" >
				    </div>
			</div>
			<br>
			 <hr style="border:0.5px solid lightgrey;">
			<div class="row">
                  <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="general_condition"  style="color:orange;">General condition:</label>
					<textarea id="general_condition" style="width:100%"  name="general_condition" style="background-color:rgb(250, 239, 207);"></textarea>
				</div>
			</div>

			<br>
			<h3 style="color: white">You can submit or fill up other parts</h3>
				<button  style="margin:0 50%;padding: 10px 30px;"class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>

	<!-- Part 2 Ends -->

	<!-- Part 3 Starts -->
	<div class="container" id="part3" style="display:none; border:1px solid black">
			<br>
			
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<a id="add_language">Add Language</a>
					<a  id="remove_language">Remove Language</a>
					<br><br>
					<div id="language_div"></div>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="mother_tongue" style="color:orange;">Mother tongue:</label>
					<input id="mother_tongue" type="text" name="mother_tongue" style="background-color:rgb(250, 239, 207);" >
				</div>
			</div>
			<br>
			<hr style="border:0.5px solid lightgrey;">
            <div class="row">
			    <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="Socio Economic Class" style="color:orange;">Socio Economic Class:</label>
					<input id="Socio Economic Class" type="text" name="socio_economic_class" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="lit_level" style="color:orange;">Literacy level:</label>
					<select id="lit_level" name="lit_level" style="background-color:rgb(250, 239, 207);" >
						<option selected disabled>Select Literacy Level</option>
						<option>High</option>
						<option>Medium</option>
						<option>Low</option>
					</select>
				</div>
			</div>
			<br>
			<hr style="border:0.5px solid lightgrey;">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="prev_school" style="color:orange;">Previous School:</label>
					<input id="prev_school" type="text" name="prev_school" style="background-color:rgb(250, 239, 207);" >
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="is_repeater" style="color:orange;">Repeater status:</label>
					<select id="is_repeater" name="is_repeater" style="background-color:rgb(250, 239, 207);">
						<option selected disabled>Select repeater status</option>
						<option>Yes</option>
						<option>No</option>
						<option>Don't know</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="prev_institution" style="color:orange;">Previous institution:</label>
					<input id="prev_institution" type="text" name="prev_institution" style="background-color:rgb(250, 239, 207);" >
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="date_of_admission" style="color:orange;">Date of Addmission:</label>
					<input id="date_of_admission" type="date" name="date_of_admission" placeholder="DD/MM/YYYY" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="date_of_discharge" style="color:orange;">Date of Discharge:</label>
					 <input id="date_of_discharge" type="date" name="date_of_discharge" placeholder="DD/MM/YYYY" style="background-color:rgb(250, 239, 207);">
				</div>
			</div>
			<br>
			<hr style="border:0.5px solid lightgrey;">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="child_court" style="color:orange;">Children Court:</label>
					<input id="child_court" type="text" name="child_court" style="background-color:rgb(250, 239, 207);" >
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="case_no" style="color:orange;">Case Number:</label>
					<input id="case_no" type="text" name="case_no" style="background-color:rgb(250, 239, 207); ">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="case_handler" style="color:orange;">Case Handler:</label>
					<input id="case_handler" type="text" name="case_handler" style="background-color:rgb(250, 239, 207);" >
				</div>
			</div>
				
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
				<label for="section_referral" style="color:orange;">Section Referral:</label>
					<input id="section_referral" type="text" name="section_referral" style="background-color:rgb(250, 239, 207);" >
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="status" style="color:orange;">Child Status:</label>
					<select id="status" name="status" style="background-color:rgb(250, 239, 207);">
						<option disabled selected>Select child status</option>
						<option>CCL</option>
						<option>Child Labour</option>
						<option>Racket</option>
						<option>Others</option>
					</select>
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="date_of_custody" style="color:orange;" >Date of Custody:</label>
					<input id="date_of_custody" type="date" name="date_of_custody" style="background-color:rgb(250, 239, 207);">
				</div>
			</div>
			<br>
			<br>
			
			<h3 style="color:white">You can submit or fill up other parts</h3>
				<button style="margin:0 50%;padding: 10px 30px;" class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<

		</div>
		<!-- Part 3 Ends -->

		<!-- Part 4 Starts -->
		<div class="container" id="part4" style="display: none; border:1px solid black;">
			<br>
			<br>
			<div class="row">
				<div class="col-lg-1">
					<a id="add_mediacal_details" style="text-align:left;float:left;background-color:rgb(250, 239, 207);">Add</a>
				</div>
				<div style="color:orange;" class="col-lg-3" id="medical"><h3>Medical</h3>
				<br>
				</div>
				<div style="color:orange;" class="col-lg-3" id="psychological"><h3>Psychological</h3>
				<br>
				</div>
				<div  style="color:orange;"  class="col-lg-3" id="psychiatric"><h3>Psychiatric</h3>
				<br>
                </div>
				<div class="col-lg-2" style="width:100%">
					<span id='rem_medical_det'><a style="text-align:right;float:right;background-color:rgb(250, 239, 207)">Remove</a></span>
				</div>
			</div>
			<hr style="border:0.5px solid lightgrey;">
			<br>
			<br>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="nature_dod" style="color:orange;">Nature and Date of Disposal:</label>
				    <textarea style="background-color:rgb(250, 239, 207)" id="nature_dod" name="nature_dod" ></textarea>
				</div>
				    <div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
				        <label for="observation" style="color:orange;">Observation:</label>
				         <textarea style="background-color:rgb(250, 239, 207)" id="observation" name="observation" ></textarea>
				</div>
		    </div>
		    <br>
		    <br>
		    <div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="pre_problem" style="color:orange;">Present problem:</label>
				    <textarea style="background-color: rgb(247, 234, 195);" id="pre_problem" name="pre_problem"></textarea>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
                     <label for="agg_cir" style="color:orange;">Aggravating Circumstances:</label>
				    <textarea style="background-color:rgb(250, 239, 207);" id="agg_cir" name="agg_cir" ></textarea>
				</div>
			</div>
			<br>
			<br>
			<hr style="padding-bottom: 20px">
			<button style="margin:0 50%;padding: 15px 40px;margin-top: 20px;" class="btn btn-primary" value="Submit">Submit</button>
			<hr>
		</div>
	</form>
	<br>
	<br>
	</div>
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