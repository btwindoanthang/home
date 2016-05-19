<?php

include('../includes/config.php');
extract($_GET);
$query="update category set delete_flg=1 where id="."'".$id."'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
 
$json_response = json_encode($query);