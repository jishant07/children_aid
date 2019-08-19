<?php
header('Content-Type: application/json');
$input = filter_input_array(INPUT_GET);
if ($input['action'] == 'edit') 
{
    echo $input['id'];
} 
else if ($input['action'] == 'delete') 
{
    require 'partials/database_credentials.php';
    $id = $input['id'];
    $sql = "delete from children_data where id = $id";
    $con->query($sql);
} 
?>