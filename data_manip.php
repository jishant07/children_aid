<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

header('Content-Type: application/json');

$input = filter_input_array(INPUT_GET);

/*$mysqli = new mysqli('localhost', 'user', 'password', 'database');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}*/

if ($input['action'] == 'edit') 
{
    echo $input['id'];
} 
else if ($input['action'] == 'delete') 
{
    echo "Delete query";
} 
else if ($input['action'] == 'restore') 
{
    echo "Restore query";
}