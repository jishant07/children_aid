<?php include './partials/header.php'; ?>
<?php 
	require("./partials/database_credentials.php");
	$sql = "select * from children_data";
	$result = $con->query($sql);
	$count = 0;
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{
        	$test = $row["added_data"];
        	$res = json_decode($test,true);
        	if($res['file_number'] == $_POST['file_number'])
        	{
        		$count = 1;
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
						if ($res['branch'])
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
		</div>
	</div>
	</div>
	<br>
	<br>
	</div>
	<?php 
			}
		}
		if($count == 0 )
		{
			echo "<br><br>Nothing Results Found";	
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