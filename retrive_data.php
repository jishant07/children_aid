<?php include './partials/header.php'; ?>
<style type="text/css">
	table{
  max-width: none
}
</style>
<div style="padding: 30px;padding-bottom:10px;background:#f4623a;"></div>
<br>

<div class="container-fluid" style="width:90% !important;">
	<table id="table_id" class="table table-responsive table-hover table-bordered table-stripped">
		<!-- <table id="table_id" class="table"> -->
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
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
		<td> <?php echo (!$count ? "NA" : $count)  ?> </td>
		<td> <?php echo (!$res['name'] ? "NA" : $res['name']) ?> </td>
		<td> <?php echo (!$res['branch'] ? "NA" : $res['branch']) ?> </td>
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
	else
	{
		echo "No data found";
	}
 ?>	
		</tbody>
 	</table>
 </div>
 <br>
 <div style="padding: 30px;padding-bottom:10px;background:#f4623a;"></div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="./jquery.tabledit.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{

		$('#table_id').DataTable();

		$('#table_id').Tabledit({
			inputClass: 'form-control input-sm',
			columns: {
        identifier: [0, 'id'],
        editable: [[1, 'name'], [2, 'branch'], [3, 'file_number'], [4, '']]
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
		});
	});
</script>
</html>