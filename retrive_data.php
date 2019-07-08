<?php include './partials/header.php'; ?>
	<br>
	<div class="container-fluid" id="banner">
		<div class="jumbotron" style="background:#fd7e14;color:white;margin:auto;">
			<h1>Data Retrival.</h1>
		</div>
	</div>
	<br>
<?php 
	require("./partials/database_credentials.php");
	$sql = "select * from children_data order by `id` desc";
	$result = $con->query($sql);
	$count = 0;
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{
        	$test = $row["added_data"];
        	$res = json_decode($test,true);
        	$count++;
?>
	<!-- Main Page -->
	<div id="main">
	<!-- Part 1 Starts -->
	<div class="container">
		<?php 
			echo "<h2>Child Number : $count </h2>" ?>
		<br>
		<br>
			<div class="row">
				<div class="col-lg-3">
					Name : <?php 
						if($res['name'])
						{
							echo $res['name'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					File Number :
					<?php 
						if ($res['file_number'])
						{
							echo $res['file_number'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Register Number : 
					<?php 
						if ($res['reg_number'])
						{
							echo $res['reg_number'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Aadhar Number : 
					<?php 
						if ($res['aadhar_number'])
						{
							echo $res['aadhar_number'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Permananent Address: 
					<?php 
						if ($res['perm_add'])
						{
							echo $res['perm_add'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Local Address : 
					<?php 
						if ($res['loc_add'])
						{
							echo $res['loc_add'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Tehsil : 
					<?php 
						if ($res['tehsil'])
						{
							echo $res['tehsil'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Branch : 
					<?php 
						if (!empty($res['branch']))
						{
							echo $res['branch'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Village : 
					<?php 
						if ($res['village'])
						{
							echo $res['village'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Mobile Number :
					<?php 
						if ($res['mob_num'])
						{
							echo $res['mob_num'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Age :
					<?php 
						if ($res['age'])
						{
							echo $res['age'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Date of Birth :
					<?php 
						if ($res['date_of_birth'])
						{
							echo $res['date_of_birth'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Height :
					<?php 
						if ($res['height'])
						{
							echo $res['height'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Weight :
					<?php 
						if ($res['weight'])
						{
							echo $res['weight'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Chest :
					<?php 
						if ($res['chest'])
						{
							echo $res['chest'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Complextion :
					<?php 
						if ($res['comp'])
						{
							echo $res['comp'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Eye Colour :
					<?php 
						if (!empty($res['eye_color']))
						{
							echo $res['eye_color'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Nose Type :
					<?php 
						if (!empty($res['nose_type']))
						{
							echo $res['nose_type'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Hair :
					<?php 
						if (!empty($res['hair']))
						{
							echo $res['hair'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Number of Teeth :
					<?php 
						if (!empty($res['teeth']))
						{
							echo $res['teeth'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
		</div>
			<!-- <a id="show_part_2">Show Part 2</a> -->
	<!-- Part 1 Ends -->

	<!-- Part 2 Startes -->
	<div class="container">
			<br>
			<div class="row">
				<div class="col-lg-3">
					Lip Type :
					<?php 
						if (!empty($res['lip_type']))
						{
							echo $res['lip_type'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					General Condition:
					<?php 
						if (!empty($res['general_condition']))
						{
							echo $res['general_condition'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Religion : 
					<?php 
						if (!empty($res['religion']))
						{
							echo $res['religion'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Caste :
					<?php 
						if (!empty($res['caste']))
						{
							echo $res['caste'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Language(s) :
					<?php 
						if (!empty($res['other_languages']))
						{
							for ($i=0; $i <count($res['other_languages'])  ; $i++) 
							{ 
								echo "<li>".$res['other_languages'][$i]."</li>";
							}
						}
						else
						{
							echo "NA";
						}
					 ?> 
				</div>
				<div class="col-lg-3">
					Mother Tongue :
					<?php 
						if (!empty($res['mother_tongue']))
						{
							echo $res['mother_tongue'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Socio Economic Class :
					<?php 
						if (!empty($res['socio_economic_class']))
						{
							echo $res['socio_economic_class'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					<label>Literacy level</label>
					<?php 
						if (!empty($res['lit_level']))
						{
							echo $res['lit_level'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Previous School :
					<?php 
						if (!empty($res['prev_school']))
						{
							echo $res['prev_school'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Child Court :
					<?php 
						if (!empty($res['child_court']))
						{
							echo $res['child_court'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Case Number :
					<?php 
						if (!empty($res['case_no']))
						{
							echo $res['case_no'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Case Handler :
					<?php 
						if (!empty($res['case_handler']))
						{
							echo $res['case_handler'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3">
					Section Referral :
					<?php 
						if (!empty($res['section_referral']))
						{
							echo $res['section_referral'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Status :
					<?php 
						if (!empty($res['status']))
						{
							echo $res['status'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Date of Custody
					<?php 
						if (!empty($res['date_of_custody']))
						{
							echo $res['date_of_custody'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Date of Addmission
					<?php 
						if (!empty($res['date_of_admission']))
						{
							echo $res['date_of_admission'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
		</div>
			<!-- <a id="show_part_3">Show Part 3</a> -->
	<!-- </div> -->
	<!-- Part 2 Ends -->

	<!-- Part 3 Starts -->
	<div class="container">
		<br>
			<div class="row">
				<div class="col-lg-3">
					Repeater Status :
					<?php 
						if (!empty($res['is_repeater']))
						{
							echo $res['is_repeater'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Date of Discharge
					<?php 
						if (!empty($res['date_of_discharge']))
						{
							echo $res['date_of_discharge'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
				<div class="col-lg-3">
					Previous Institution :
					<?php 
						if (!empty($res['prev_institution']))
						{
							echo $res['prev_institution'];
						}
						else
						{
							echo "NA";
						}
					 ?>
				</div>
			</div>
			<br>
			<!-- <a id="add_mediacal_details" style="text-align:left;float:left;">Add</a> -->
			<br>
			<br>
			<?php 
				if (!empty($res['medical']))
				{
					for ($i=0; $i < count($res['medical']) ; $i++) 
					{ 		
			?>
			<div class="row">
				<div class="col-lg-4">
				<br>
				Medical	<?php echo "<li>".$res['medical'][$i]."</li>";  ?>
				</div>
				<div class="col-lg-4">
				<br>
				Psychological	<?php echo "<li>".$res['psychological'][$i]."</li>";  ?>
				</div>
				<div class="col-lg-4">
				<br>
				Psychiatric	<?php echo "<li>".$res['psychiatric'][$i]."</li>";  ?>
				</div>
			</div>
			<?php 
					}
				}
				else
				{
					echo "Medical Details Un-Available";
				}	 
			?>
			<br>
			<br>
			<br>	
		</div>
		<!-- Part 3 Ends -->

		<!-- Part 4 Starts -->
		<div class="container" id="part4">
			<br>
			<div class="col-lg-3">
				Nature and Date of Disposal :
				<?php 
						if (!empty($res['nature_dod']))
						{
							echo $res['nature_dod'];
						}
						else
						{
							echo "NA";
						}
					 ?>

			</div>
			<div class="col-lg-3">
				Observation :
				<?php 
						if (!empty($res['observation']))
						{
							echo $res['observation'];
						}
						else
						{
							echo "NA";
						}
					 ?>
			</div>
			<div class="col-lg-3">
				Present Problem :
				<?php 
						if (!empty($res['pre_problem']))
						{
							echo $res['pre_problem'];
						}
						else
						{
							echo "NA";
						}
					 ?>
			</div>
			<div class="col-lg-3">
				Aggravating Circumstances :
				<?php 
						if (!empty($res['agg_cir']))
						{
							echo $res['agg_cir'];
						}
						else
						{
							echo "NA";
						}
					 ?>
			</div>
			<br>
			<br>
		</div>
	</div>
	</div>
	</div>
	<br>
	<br>
	</div>
	<?php 
		}
	}
	else
	{
		echo "<h1 style='text-align:center;margin:auto;'>No data present</h1>";
	}
?>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
</html>