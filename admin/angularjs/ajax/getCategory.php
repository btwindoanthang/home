<?php
include('../includes/config.php');

$query="select id, name, name2 from category c where id='2' "; 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	if($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}
# JSON-encode the response
return $arr;

// # Return the response
//echo $json_response;
?>
