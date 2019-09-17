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
	*
	{
		text-align:center;
		margin:auto;
	}
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
				<button id="part1_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue">Part 1</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part2_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue">Part 2</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part3_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue" >Part 3</button>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-6 mb-2" >
				<button id="part4_button" class="btn btn-info" style="padding: 10px 30px; border:0.2px solid white;background-color:steelblue">Part 4</button>
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
			<div class="col-lg-4 col-sm-6 col-xs-12 mb-2" >
				<label for="Name" style="color:orange;">Name:</label>
                <input id="Name" type="text" placeholder="John" style="background-color:rgb(250, 239, 207);" name="NameJuvenile">
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12 mb-2" >
                <label for="Age" style="color:orange;">Age:</label>
                <input id="Age" type="number" placeholder="10" style="background-color:rgb(250, 239, 207);"  name="age">
            </div>

            <div class="col-lg-4 col-sm-6 col-xs-12 mb-2" >
                <label for="DOB" style="color:orange;">Date of Birth:</label>
                <input id="DOB" type="date" placeholder="12/4/1999" pattern={(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}} style="background-color:rgb(250, 239, 207);" name="dateofbirth"	>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 mb-2" >
				<label for="Phone" style="color:orange;">Mobile number:</label>
                <input id="Phone" type="text" style="background-color:rgb(250, 239, 207);" name="mobileNo"  >
            </div>
		</div>
		<hr style="border:0.5px solid lightgrey;">
		<br>
		<br>

			<div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
				<label for="FNo" style="color:orange;">File number:</label>
                <input id="FNo" type="text" style="background-color:rgb(250, 239, 207);" name="fileNo">
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2">
                <label for="RNo" style="color:orange;">Register number:</label>
                <input id="RNo" type="text" style="background-color:rgb(250, 239, 207);"  name="missingChildNo" >
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2">
                <label for="UID" style="color:orange;">Aadhar number:</label>
                <input id="UID" type="text" placeholder="XXXX-XXXX-XXXX" pattern={[0-9]{4}.[0-9]{4}.[0-9]{4}} style="background-color:rgb(250, 239, 207);" name="adharCardNo" >
            </div>
		</div> 
        <hr style="border:0.5px solid lightgrey;">
        <br>
        
        <br>
		<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="P_addr" style="color:orange;">Permanent Address:</label>
					<textarea id="P_addr"style="width:100%;" name="permentaddress" style="background-color:rgb(250, 239, 207);"></textarea>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="L_addr" style="color:orange;">Local Address:</label>
					<textarea  id="L_addr"style="width:100%;" name="localaddress" style="background-color:rgb(250, 239, 207);" ></textarea>
				</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
				<label for="Tehsil" style="color:orange;">Tehsil:</label>
                <input id="Tehsil" type="text" name="Tashil" style="background-color:rgb(250, 239, 207);"   >
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
                <label for="Branch" style="color:orange;">Branch:</label>
                <!-- <input id="Branch" type="text" name="branch" style="background-color:rgb(250, 239, 207);"  > -->
                <select name="dept_id" style="background-color:rgb(250, 239, 207);">
                	<option  selected value="0">Select Branch</option>
                	<option value="1">Chembur Children's Home</option>
                	<option value="2">Additional Children's Home</option>
                	<option value="3">Bal Kalyan Nagari</option>
                	<option value="4">David Sassoon Industrial School</option>
                	<option value="5">New Childrens Home</option>
                	<option value="5">Childrens Home</option>
                </select>
            </div>

            <div class="col-lg-4 col-sm-4 col-xs-12 mb-2"  >
                <label for="Village" style="color:orange;">Village:</label>
                <input id="Village" type="text" name="village" style="background-color:rgb(250, 239, 207);"  >
            </div>
           </div>
            
            <hr style="border:0.5px solid lightgrey;">
			<br>
			<br>
				<button style="padding:10px;" class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>
	<!-- Part 1 Ends -->

	<!-- Part 2 Startes -->
	<div class="container" id="part2" style="display:none; border:0.5px solid black">

			<br>
			<div class="row">
			 <hr style="border:0.5px solid lightgrey;">
			</div>	
			<br>
			<div class="row">
				<div class="col-lg-4 col-sm-4 col-xs-6 mb-2">
					<label for="eye_color"  style="color:orange;">Eyes:</label>
					<select id="eye_color" name="eyes" style="background-color:rgb(250, 239, 207);">
						<option selected value="None">Select an Eye Colour</option>
						<option value="Black">Balck</option>
						<option>Brown</option>
						<option>Green</option>
						<option>Hazel</option>
						<option>Gold</option>
						<option>Other</option>
					</select>
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
			    		<label for="hair"  style="color:orange;">Hair:</label>
					    <input id="hair" type="text" name="hair" placeholder="wavy" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
				    	<label for="comp"  style="color:orange;">Complexion:</label>
				    	<input id="comp" type="text" name="comp" placeholder="dark" style="background-color:rgb(250, 239, 207);">
				</div>
				<!-- <div class="col-lg-3 col-sm-4 col-xs-6 mb-2">
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
				</div> -->
				<!-- <div class="col-lg-3 col-sm-4 col-xs-6 mb-2">
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
				</div> -->
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
					   <label for="Height"  style="color:orange;">Height:</label>
					   <input id="Height" type="text" name="hight" style="background-color:rgb(250, 239, 207);">
				    </div>
				    <div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
				        <label for="Wight"  style="color:orange;">Weight:</label>
					    <input id="Weight" type="text" name="waight" style="background-color:rgb(250, 239, 207);" >
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
				<button  style="padding:10px;"class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>

	<!-- Part 2 Ends -->

	<!-- Part 3 Starts -->
	<div class="container" id="part3" style="display:none; border:1px solid black">
			<br>
			
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="Socio Economic Class" style="color:orange;">District</label>
					<input id="Socio Economic Class" type="text" name="District" style="background-color:rgb(250, 239, 207);">
				</div>
			</div>
			<br>
			<hr style="border:0.5px solid lightgrey;">
            <div class="row">
			    <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="Socio Economic Class" style="color:orange;">Mother Name :</label>
					<input id="Socio Economic Class" type="text" name="motherName" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<!-- <label for="lit_level" style="color:orange;">Literacy level:</label>
					<select id="lit_level" name="lit_level" style="background-color:rgb(250, 239, 207);" >
						<option selected disabled>Select Literacy Level</option>
						<option>High</option>
						<option>Medium</option>
						<option>Low</option>
					</select> -->
					<label for="lit_level" style="color:orange;">Father Name:</label>
					<input type="text" name="fatherName" style="background-color:rgb(250, 239, 207);" placeholder="Father's Name">
				</div>
			</div>
			<br>
			<hr style="border:0.5px solid lightgrey;">
			<div class="row">
				<!-- <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="prev_school" style="color:orange;">Previous School:</label>
					<input id="prev_school" type="text" name="prev_school" style="background-color:rgb(250, 239, 207);" >
				</div> -->
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="is_repeater" style="color:orange;">State:</label>
					<input type="text" name="state" style="background-color:rgb(250, 239, 207);" placeholder="Enter State">
				</div>
			</div>
			<br>
			<div class="row">
				<!-- <div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="prev_institution" style="color:orange;">Previous institution:</label>
					<input id="prev_institution" type="text" name="prev_institution" style="background-color:rgb(250, 239, 207);" >
				</div> -->
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="date_of_admission" style="color:orange;">Date of Addmission:</label>
					<input id="date_of_admission" type="date" name="dateAdmission" placeholder="DD/MM/YYYY" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="date_of_discharge" style="color:orange;">Date of Discharge:</label>
					 <input id="date_of_discharge" type="date" name="postofffice" placeholder="Post Office" style="background-color:rgb(250, 239, 207);">
				</div>
			</div>
			<br>
			<hr style="border:0.5px solid lightgrey;">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="child_court" style="color:orange;">Children Court:</label>
					<input id="child_court" type="text" name="childrenCourt" style="background-color:rgb(250, 239, 207);" >
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="case_no" style="color:orange;">Case Number:</label>
					<input id="caseNo" type="text" name="caseNo" style="background-color:rgb(250, 239, 207); ">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="case_handler" style="color:orange;">Police Station:</label>
					<input id="case_handler" type="text" name="PoliceSatation" style="background-color:rgb(250, 239, 207);" >
				</div>
			</div>
				
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
				<label for="section_referral" style="color:orange;">Section Referral:</label>
					<input id="section_referral" type="text" name="section_referral" style="background-color:rgb(250, 239, 207);" >
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="status" style="color:orange;">FIR:</label>
					<!-- <select id="status" name="status" style="background-color:rgb(250, 239, 207);">
						<option disabled selected>Select child status</option>
						<option>CCL</option>
						<option>Child Labour</option>
						<option>Racket</option>
						<option>Others</option>
					</select> -->
					<input type="text" name="FIR" style="background-color:rgb(250, 239, 207);">
				</div>
				<div class="col-lg-4 col-sm-6 col-xs-6 mb-2">
					<label for="date_of_custody" style="color:orange;" >Taluka : </label>
					<input id="date_of_custody" type="date" name="taluka" style="background-color:rgb(250, 239, 207);">
				</div>
			</div>
			<br>
			<br>
				<button class="btn btn-primary" value="Submit">Submit</button>
				<br>
		</div>
		<!-- Part 3 Ends -->

		<!-- Part 4 Starts -->
		<div class="container" id="part4" style="display: none; border:1px solid black;">
			<br>
			<br>
			<div class="row">
				<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="nature_dod" style="color:orange;">Date of Discharge</label>
					<br>
				    <textarea style="background-color:rgb(250, 239, 207)" id="nature_dod" name="datedischarge" ></textarea>
				</div>
				    <div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
				        <label for="observation" style="color:orange;">Observation:</label>
				        <br>
				         <textarea style="background-color:rgb(250, 239, 207)" id="observation" name="observation" ></textarea>
				</div>
		    </div>
		    <br>
		    <br>
		    <div class="row">
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
					<label for="pre_problem" style="color:orange;">Present problem:</label>
					<br>
				    <textarea style="background-color: rgb(247, 234, 195);" id="pre_problem" name="persentProblem"></textarea>
				</div>
				<div class="col-lg-6 col-sm-6 col-xs-6 mb-2">
                     <label for="agg_cir" style="color:orange;">Aggravating Circumstances:</label>
                     <br>
				    <textarea style="background-color:rgb(250, 239, 207);" id="agg_cir" name="AggarvatingCircumstances" ></textarea>
				</div>
			</div>
			<br>
			<br>
			<hr style="padding-bottom: 20px">
			<button style="margin:0 50%;padding: 15px 40px;margin-top: 20px;" class="btn btn-primary" value="Submit">Submit</button>
			<hr>
		</div>
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
	});
</script>
</html>