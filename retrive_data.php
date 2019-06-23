<!DOCTYPE html>
<html>
<head>
	<title>Data Retrival Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>Data Retrival</h1>
		</div>
<?php 
	require("./database_credentials.php");
	$sql = "select * from children_data";
	$result = $con->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{
        	$test = $row["added_data"];
        	$res = json_decode($test,true);
?>
<?php 
			if ($res['name'] == "") 
			{
				echo "<h3> Name Not Present </h3>";
			}
			else 
			{
				echo "<h3>".$res['name']."</h3>";
			}	 
?>
</div>
</body>
</html>
<?php 
		}
	}
	else
	{
		echo "No data present";
	}
?>