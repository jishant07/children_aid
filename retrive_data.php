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
 <?php $_SESSION['is_success'] = 0;}
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
				<th>Eye Color</th>
				<th>Hair</th>
				<th>Children Court</th>
				<th>Case Number</th>
				<th>Case Handler</th>
				<th>Section Referral</th>
				<th>Date of Admission</th>
				<th>Date of Discharge</th>
				<th>Father Name</th>
				<th>Mother Name</th>
				<th>Observation</th>
				<th>Present Problem</th>
				<th>Aggravating Circumstances</th>
				<th>PDF</th>
			</tr>
		</thead>
		<tbody>
<?php 
	require("./partials/database_credentials.php");
	$sql = "select * from registration";
	$result = $con->query($sql);
	$count = 0;
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{
        	//$test = $row["added_data"];
        	//$row = json_decode($test,true);
        	$count++;
?>
	<tr>
		<td> <?php echo $row['id'];  ?> </td>
		<td> <?php echo (!$row['NameJuvenile'] ? "NA" : $row['NameJuvenile']) ?> </td>
		<td> <img src=" <?php echo "pimage/".$row['pimage']; ?> " alt="Image of the Child" height="200" width="200"> </td>
		<td> <?php 
			if($row['dept_id'] == 0){
				echo('N/A');
			}
			else if ($row['dept_id'] == 1){
				echo("Chembur Children's Home");
			}
			else if ($row['dept_id'] == 2){
				echo("Additional Children's Home");
			}
			else if ($row['dept_id'] == 3){
				echo("Bal Kalyan Nagari");
			}
			else if ($row['dept_id'] == 4){
				echo("David Sassoon Industrial School");
			}
			else if ($row['dept_id'] == 5){
				echo("New Childrens Home");
			}
			else if ($row['dept_id'] == 6){
				echo("Childrens Home");
			}
			 ?> </td>
		<td> <?php echo (!$row['fileNo'] ? "NA" : $row['fileNo']) ?> </td>
		<td> <?php echo (!$row['missingChildNo'] ? "NA" : $row['missingChildNo']) ?> </td>
		<td> <?php echo (!$row['adharCardNo'] ? "NA" : $row['adharCardNo']) ?> </td>
		<td> <?php echo (!$row['permentaddress'] ? "NA" : $row['permentaddress']) ?> </td>
 		<td> <?php echo (!$row['localaddress'] ? "NA" : $row['localaddress']) ?> </td>
		<td> <?php echo (!$row['Tashil'] ? "NA" : $row['Tashil']) ?> </td>
		<td> <?php echo (!$row['village'] ? "NA" : $row['village']) ?> </td>
		<td> <?php echo (!$row['mobileNo'] ? "NA" : $row['mobileNo']) ?> </td>
		<td> <?php echo (!$row['age'] ? "NA" : $row['age']) ?> </td>
		<td> <?php echo (!$row['dateofbirth'] ? "NA" : $row['dateofbirth']) ?> </td>
		<td> <?php echo (!$row['hight'] ? "NA" : $row['hight']) ?> </td>
		<td> <?php echo (!$row['waight'] ? "NA" : $row['waight']) ?> </td>
		<td> <?php echo (!$row['chest'] ? "NA" : $row['chest']) ?> </td>
		<td> <?php echo (!isset($row['eyes']) ? "NA" : $row['eyes']) ?> </td>
		<td> <?php echo (!$row['hair'] ? "NA" : $row['hair']) ?> </td>
		<td> <?php echo (!$row['childrenCourt'] ? "NA" : $row['childrenCourt']) ?> </td>
		<td> <?php echo (!$row['caseNo'] ? "NA" : $row['caseNo']) ?> </td>
		<td> <?php echo (!$row['PoliceSatation'] ? "NA" : $row['PoliceSatation']) ?> </td>
		<td> <?php echo (!$row['FIR'] ? "NA" : $row['FIR']) ?> </td>
		<td> <?php echo (!$row['dateAdmission'] ? "NA" : $row['dateAdmission']) ?> </td>
		<td> <?php echo (!$row['datedischarge'] ? "NA" : $row['datedischarge']) ?> </td>
		<td> <?php echo (!$row['fatherName'] ? "NA" : $row['fatherName']) ?> </td>
		<td> <?php echo (!$row['motherName'] ? "NA" : $row['motherName']) ?> </td>
		<td> <?php echo (!$row['observation'] ? "NA" : $row['observation']) ?> </td>
		<td> <?php echo (!$row['persentProblem'] ? "NA" : $row['persentProblem']) ?> </td>
		<td> <?php echo (!$row['AggarvatingCircumstances'] ? "NA" : $row['AggarvatingCircumstances']) ?> </td>
		<td> <a href = "createpdf.php?id=<?php echo $row['id'] ?>"> Generate PDF </a></td>
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