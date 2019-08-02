<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Children's Aid Society- in assiciation with Atharva Foundation</title>
<!-- Font Awesome Icons -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<!-- Theme CSS - Includes Bootstrap -->
<link href="css/creative.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.10.19/b-1.5.6/sl-1.3.0/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="Editor-1.9.0/css/editor.dataTables.css">
 
<style type="text/css">
	*
	{
		font-size: 15px;
		line-height: 20px;
	}
	input,select
	{
		width:100%;
		padding:10px;
	}
	.container
	{
		width:80% !important;
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
</style>
</head>
<body>
	<div style="padding-top: 130px;"></div>
	<br>
	<br>
	<!-- Main Page -->
	<div id="main" style="margin: auto;position: relative;">
	<!-- Part 1 Starts -->
	<form method="post" action="minimal_data_save.php" enctype="multipart/form-data">
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
			<div class="row" style="display: none;">
				<div class="col-lg-6">
					<input type="text" name="lat" id="lat">
				</div>
				<div class="col-lg-6">
					<input type="text" name="long" id="long">
				</div>
			</div>
			<br>
			<br>
			<h4>You can submit or fill up other parts</h4>
				<button class="btn btn-primary" value="Submit">Submit</button>
				<br>
				<br>
	</div>
	<!-- Part 1 Ends -->
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
	window.onload = function()
	{
		if('geolocation' in navigator)
		{
			navigator.geolocation.getCurrentPosition(position=>
			{
				var lat = position.coords.latitude;
				var long = position.coords.longitude;
				document.getElementById('lat').value = lat;
				document.getElementById('long').value = long;
			});
		}
		else
		{
			alert("Doesn't support Geolocation");
		}
	};
</script>
</html>