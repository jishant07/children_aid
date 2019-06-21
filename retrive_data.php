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
        	if($res['name'] == "")
        	{
        		echo "Name not present";
        	}
        	else
        	{
        		/*Example of data retrival*/
        		echo $res['name'];
        	}
        }
	}
	else
	{
		echo "Data is missing";
	}
 ?>