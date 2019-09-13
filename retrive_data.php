<?php 
session_start();
 if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
 {$admin = 1;}
 else if(isset($_SESSION['is_worker']) && $_SESSION['is_worker'])
 {$admin = 0;}
 else
 {
  header("Location: login.php");
 }
 ?>
 <?php if(isset($_SESSION['is_success']) && $_SESSION['is_success'])
 { ?>
 	<script type="text/javascript">
 		alert("The Data was added");
 	</script>
 <?php }
 else
 {

 } ?>
<?php include './partials/header.php'; ?>
<style type="text/css">
*
{
	font-style: Merriweather;
}
body
{
	background: url(https://images.unsplash.com/photo-1565043534407-83e019d5f1c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1402&q=80);
}
.container-fluid
{
	margin: 50px auto;
	background: rgba(242,184,97,0.7);
	padding:30px;
	border-radius: 10px;
}
th
{
	border:2px solid rgba(242,184,97) !important;
}
.table
{
	border-radius:10px;
	-webkit-box-shadow: 0px 0px 20px 2px rgba(0,0,0,0.5);
	-moz-box-shadow: 0px 0px 20px 2px rgba(0,0,0,0.5);
	box-shadow: 0px 0px 20px 2px rgba(0,0,0,0.5);
	background: white;
}
input
{
	-webkit-box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.5);
	-moz-box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.5);
	box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.5);
	border-radius: 10px;
	margin-bottom: 20px;
}
.hover
{
	border:2px solid orange;
	-webkit-box-shadow: 0px 0px 35px 2px rgba(0,0,0,0.5);
	-moz-box-shadow: 0px 0px 35px 2px rgba(0,0,0,0.5);
	box-shadow: 0px 0px 35px 2px rgba(0,0,0,0.5);
	transition: 0.3s;
}
</style>
<br>
<div class="container-fluid">
	<table id="table_id" class="table table-responsive table-hover table-bordered table-stripped bg-light">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Branch</th>
				<th>File Number</th>
				<th>Register Number</th>
				<th>Aadhaar Number</th>
				<th>Permanent Address</th>
				<th>Local Address</th>
				<th>Tehsil</th>
				<th>Village</th>
				<th>Mobile Number</th>
				<th>Age</th>
				<th>Date of Birth</th>
				<th>Height</th>
				<th>Weight</th>
				<th>Chest</th>
				<th>Complextion</th>
				<th>Eye Color</th>
				<th>Nose Type</th>
				<th>Hair</th>
				<th>Number of Teeth</th>
				<th>Lip Type</th>
				<th>General Condition</th>
				<th>Religion</th>
				<th>Caste</th>
				<th>Mother Tongue</th>
				<th>Other Languages</th>
				<th>Socio Economic Class</th>
				<th>Literacy Level</th>
				<th>Previous School</th>
				<th>Children Court</th>
				<th>Case Number</th>
				<th>Case Handler</th>
				<th>Section Referral</th>
				<th>Status</th>
				<th>Date of Custody</th>
				<th>Date of Admission</th>
				<th>Repeater Status</th>
				<th>Date of Discharge</th>
				<th>Previous Institution</th>
				<th>Medical</th>
				<th>Psychological</th>
				<th>Psychiatric</th>
				<th>Nature and Date of Disposal</th>
				<th>Observation</th>
				<th>Present Problem</th>
				<th>Aggravating Circumstances</th>
			</tr>
		</thead>
		<tbody>
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
        	$count++;
?>
	<tr>
		<td> <?php echo $row['id'];  ?> </td>
		<td> <?php echo (!$res['name'] ? "NA" : $res['name']) ?> </td>
		<td> <img src=" <?php echo $row['photo_link']; ?> " alt="Image of the Child" height="200" width="200"> </td>
		<td> <?php echo (!isset(($res['branch'])) ? "NA" : $res['branch']) ?> </td>
		<td> <?php echo (!$res['file_number'] ? "NA" : $res['file_number']) ?> </td>
		<td> <?php echo (!$res['reg_number'] ? "NA" : $res['reg_number']) ?> </td>
		<td> <?php echo (!$res['aadhar_number'] ? "NA" : $res['aadhar_number']) ?> </td>
		<td> <?php echo (!$res['perm_add'] ? "NA" : $res['perm_add']) ?> </td>
 		<td> <?php echo (!$res['loc_add'] ? "NA" : $res['loc_add']) ?> </td>
		<td> <?php echo (!$res['tehsil'] ? "NA" : $res['tehsil']) ?> </td>
		<td> <?php echo (!$res['village'] ? "NA" : $res['village']) ?> </td>
		<td> <?php echo (!$res['mob_num'] ? "NA" : $res['mob_num']) ?> </td>
		<td> <?php echo (!$res['age'] ? "NA" : $res['age']) ?> </td>
		<td> <?php echo (!$res['date_of_birth'] ? "NA" : $res['date_of_birth']) ?> </td>
		<td> <?php echo (!$res['height'] ? "NA" : $res['height']) ?> </td>
		<td> <?php echo (!$res['weight'] ? "NA" : $res['weight']) ?> </td>
		<td> <?php echo (!$res['chest'] ? "NA" : $res['chest']) ?> </td>
		<td> <?php echo (!$res['comp'] ? "NA" : $res['comp']) ?> </td>
		<td> <?php echo (!isset($res['eye_color']) ? "NA" : $res['eye_color']) ?> </td>
		<td> <?php echo (!isset($res['nose_type']) ? "NA" : $res['nose_type']) ?> </td>
		<td> <?php echo (!$res['hair'] ? "NA" : $res['hair']) ?> </td>
		<td> <?php echo (!$res['teeth'] ? "NA" : $res['teeth']) ?> </td>
		<td> <?php echo (!isset($res['lip_type']) ? "NA" : $res['lip_type']) ?> </td>
		<td> <?php echo (!$res['general_condition'] ? "NA" : $res['general_condition']) ?> </td>
		<td> <?php echo (!$res['religion'] ? "NA" : $res['religion']) ?> </td>
		<td> <?php echo (!$res['caste'] ? "NA" : $res['caste']) ?> </td>
		<td> <?php echo (!$res['mother_tongue'] ? "NA" : $res['mother_tongue']) ?> </td>
		<td> 
			<?php 
				if(!empty($res['other_languages']))
				{
					for($i=0;$i <count($res['other_languages']); $i++) 
					{ 
						echo "<li>".$res['other_languages'][$i]."</li>";
					}
				}
				else
				{
					echo "NA";
				}
			?>
		</td>
		<td> <?php echo (!$res['socio_economic_class'] ? "NA" : $res['socio_economic_class']) ?> </td>
		<td> <?php echo (!isset($res['lit_level']) ? "NA" : $res['lit_level']) ?> </td>
		<td> <?php echo (!$res['prev_school'] ? "NA" : $res['prev_school']) ?> </td>
		<td> <?php echo (!$res['child_court'] ? "NA" : $res['child_court']) ?> </td>
		<td> <?php echo (!$res['case_no'] ? "NA" : $res['case_no']) ?> </td>
		<td> <?php echo (!$res['case_handler'] ? "NA" : $res['case_handler']) ?> </td>
		<td> <?php echo (!$res['section_referral'] ? "NA" : $res['section_referral']) ?> </td>
		<td> <?php echo (!isset($res['status']) ? "NA" : $res['status']) ?> </td>
		<td> <?php echo (!$res['date_of_custody'] ? "NA" : $res['date_of_custody']) ?> </td>
		<td> <?php echo (!$res['date_of_admission'] ? "NA" : $res['date_of_admission']) ?> </td>
		<td> <?php echo (!isset($res['is_repeater']) ? "NA" : $res['is_repeater']) ?> </td>
		<td> <?php echo (!$res['date_of_discharge'] ? "NA" : $res['date_of_discharge']) ?> </td>
		<td> <?php echo (!$res['prev_institution'] ? "NA" : $res['prev_institution']) ?> </td>
		<td> 
			<?php 
				if(!empty($res['medical']))
				{
					for($i=0;$i <count($res['medical']); $i++) 
					{ 
						echo "<li>".$res['medical'][$i]."</li>";
					}
				}
				else
				{
					echo "NA";
				}
			?>
		</td>
		<td> 
			<?php 
				if(!empty($res['psychological']))
				{
					for($i=0;$i <count($res['psychological']); $i++) 
					{ 
						echo "<li>".$res['psychological'][$i]."</li>";
					}
				}
				else
				{
					echo "NA";
				}
			?>
		</td>
		<td> 
			<?php 
				if(!empty($res['psychiatric']))
				{
					for($i=0;$i <count($res['psychiatric']); $i++) 
					{ 
						echo "<li>".$res['psychiatric'][$i]."</li>";
					}
				}
				else
				{
					echo "NA";
				}
			?>
		</td>
		<td> <?php echo (!$res['nature_dod'] ? "NA" : $res['nature_dod']) ?> </td>
		<td> <?php echo (!$res['observation'] ? "NA" : $res['observation']) ?> </td>
		<td> <?php echo (!$res['pre_problem'] ? "NA" : $res['pre_problem']) ?> </td>
		<td> <?php echo (!$res['agg_cir'] ? "NA" : $res['agg_cir']) ?> </td>
	</tr>
<?php 
		}
	}
 ?>	
		</tbody>
 	</table>
 </div>
 <br>
 <br>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="includes/jquery.tabledit.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#table_id').DataTable();
		/*$('#table_id').Tabledit({
			inputClass: 'form-control input-sm',
			columns: {
        identifier: [0, 'id'],
        editable: [[1, 'name'], [3, 'branch'], [4, 'file_number']]
		    },
			buttons: {
			    edit: {
			        class: 'btn btn-sm btn-primary',
			        html: '<span class="glyphicon glyphicon-pencil"></span>',
			        action: 'edit'
			    },
			    delete: {
			        class: 'btn btn-sm btn-info',
			        html: '<span class="glyphicon glyphicon-trash"></span>',
			        action: 'delete'
			    },
			    save: {
			        class: 'btn btn-sm btn-success',
			        html: 'Save'
			    },
			    restore: {
			        class: 'btn btn-sm btn-warning',
			        html: 'Restore',
			        action: 'restore'
			    },
			    confirm: {
			        class: 'btn btn-sm btn-danger',
			        html: 'Confirm'
			    }
			},
		    onDraw: function() {
		        console.log('onDraw()');
		    },
		    onSuccess: function(data, textStatus, jqXHR) {
		        console.log('onSuccess(data, textStatus, jqXHR)');
		        console.log(data);
		        console.log(textStatus);
		        console.log(jqXHR);
		    },
		    onFail: function(jqXHR, textStatus, errorThrown) {
		        console.log('onFail(jqXHR, textStatus, errorThrown)');
		        console.log(jqXHR);
		        console.log(textStatus);
		        console.log(errorThrown);
		    },
		    onAlways: function() {
		        console.log('onAlways()');
		    },
		    onAjax: function(action, serialize) {
		        console.log('onAjax(action, serialize)');
		        console.log(action);
		        console.log(serialize);
		        $.ajax({
		            url: "data_manip.php",
		            cache: false,
		            method: "GET",
		            data: serialize,
		            success: function()
		            {
		                alert("Done");
		            },
		            error: function()
		            {
		            	alert("Didn't happen");
		            }
		        });
		    }
		});*/
	});
</script>
</html>