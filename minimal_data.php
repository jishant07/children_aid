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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.19/b-1.5.6/sl-1.3.0/datatables.min.css"/>
<!-- <div style="padding: 30px;padding-bottom:10px;background:#f4623a;" class="fixed-top"></div> -->
<br>
<div class="container-fluid">
	<table id="table_id" class="table table-responsive table-hover table-bordered table-stripped">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Branch</th>
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
		<td> <?php echo $row['id']  ?> </td>
		<td> <?php echo (!$res['name'] ? "NA" : $res['name']) ?> </td>
		<td> 
			<img src="<?php if(!empty($row['photo_link'])){echo $row['photo_link'];}else{echo "img/default.jpg";} ?>" alt="No image here" height="200" width="200">
		</td>
		<td> <?php echo (!$res['branch'] ? "NA" : $res['branch']) ?> </td>
		<td> <?php echo (!$res['perm_add'] ? "NA" : $res['perm_add']) ?> </td>
 		<td> <?php echo (!$res['loc_add'] ? "NA" : $res['loc_add']) ?> </td>
		<td> <?php echo (!$res['tehsil'] ? "NA" : $res['tehsil']) ?> </td>
		<td> <?php echo (!$res['village'] ? "NA" : $res['village']) ?> </td>
		<td> <?php echo (!$res['mob_num'] ? "NA" : $res['mob_num']) ?> </td>
		<td> <?php echo (!$res['age'] ? "NA" : $res['age']) ?> </td>
		<td> <?php echo (!$res['date_of_birth'] ? "NA" : $res['date_of_birth']) ?> </td>
		<td> 
			<iframe src="https://maps.google.com/maps?q=<?php echo (!$res['lat'] ? "NA" : $res['lat']) ?>,<?php echo (!$res['long'] ? "NA" : $res['long']) ?>&z=15&output=embed" width="360" height="200" frameborder="0" style="border:0"></iframe>
		</td>
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
 <!-- <div style="padding: 30px;padding-bottom:10px;margin-top:20px !important;background:#f4623a;" class="fixed-bottom"></div> -->
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#table_id').DataTable();
		$('input').on("focus",function()
		{
			$(this).addClass('hover');
		});
		$('input').on("focusout",function()
		{
			$(this).removeClass('hover');
		});
	});
</script>
</html>