<?php 
session_start();
 if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'])
 {}
 else if(isset($_SESSION['is_worker']) && $_SESSION['is_worker'])
 {}
 else
 {
  header("Location: login.php");
 }
 ?>
<?php include './partials/header.php'; ?>
<style type="text/css">
	table{
  max-width: none
}
.container
{
	width: 80% !important;
	margin: 50px auto;
}
</style>
<div style="padding: 30px;padding-bottom:10px;background:#f4623a;" class="fixed-top"></div>
<br>
<div class="container">
	<table id="table_id" class="table table-responsive table-hover table-bordered table-stripped">
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
				<th>Location</th>
			</tr>
		</thead>
		<tbody>
<?php 
	require("./partials/database_credentials.php");
	$sql = "select * from minimal_form_data";
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
		<td> 
			<iframe src="http://maps.google.com/maps?q=<?php echo (!$res['lat'] ? "NA" : $res['lat']) ?>, <?php echo (!$res['long'] ? "NA" : $res['long']) ?>&z=15&output=embed" width="360" height="200" frameborder="0" style="border:0"></iframe>
		</td>
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
 <br>
 <div style="padding: 30px;padding-bottom:10px;margin-top:20px !important;background:#f4623a;" class="fixed-bottom"></div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="./includes/jquery.tabledit.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{

		var table = $('#table_id').DataTable({
			/*responsive:true,
			scrollY:true,*/
		});

		/*$('#table_id').Tabledit({
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
		});*/
	});
</script>
</html>