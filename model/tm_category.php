<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}


require_once(dirname(dirname(__FILE__)) . '/libs/database.php');

$dbClass = new Database();
$db = $dbClass->connect();

$category = array();
$i = 0;
if($_SESSION['lang']==1)
{$sql = "select id, name from category"; }
 else {
     $sql = "select id, name2 as name from category";
}

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $category[$i] = $fetch;
    $i++;
}
//var_dump($category);

$location = array();
$i = 0;
if($_SESSION['lang']==1)
{
$sql = "select id, name from location";    
}
 else {
$sql = "select id, name2 as name from location";    
}

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $location[$i] = $fetch;
    $i++;
}
?>
