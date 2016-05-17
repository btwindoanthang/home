<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}


require_once(dirname(dirname(__FILE__)) . '/libs/database.php');

$dbClass = new Database();
$db = $dbClass->connect();
//new
$product_new = array();
$i = 0;

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id';
$sql.=" order by p.datepost desc limit 5";

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $product_new[$i] = $fetch;
    $i++;
}
//hot
$product_hot = array();
$i = 0;

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id and hot="1" ';
$sql.=" order by p.datepost desc limit 5";

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $product_hot[$i] = $fetch;
    $i++;
}
//var_dump($location);
$product = array();
$i = 0;

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id';
$sql.=" order by id desc limit 5";

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $product[$i] = $fetch;
    $i++;
}

$sale = array();
$i = 0;

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id  and forsale="1" ';
$sql.=" order by id desc limit 5";

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $sale[$i] = $fetch;
    $i++;
}
$rent = array();
$i = 0;

if ($_SESSION['lang'] == 1) {
    $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
} else {
    $sql = 'select p.id,c.name2 as category,l.name2 as location,p.namevi as name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square';
}

$sql.=' from product p,category c, location l';
$sql.=' where p.idlocation=l.id and p.idcategory=c.id and forsale="0" ' ;
$sql.=" order by id desc limit 5";

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $rent[$i] = $fetch;
    $i++;
}
?>
