<?php

if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}


require_once(dirname(dirname(__FILE__)) . '/libs/database.php');

$dbClass = new Database();
$db = $dbClass->connect();


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

if (isset($loca)) {
    $sql .=" and idlocation='$loca' ";
}
if (isset($loca)) {
    $sql .=" and bedroom='$bed' ";
}
if (isset($loca)) {
    $sql .=" and bathroom='$bath' ";
}
if (isset($range)) {
    switch ($range) {
        case 1:
            $sql .= "and price >=1 and price <2 ";
            break;
        case 2:
            $sql .= "and price >=2 and price <3 ";
            break;
        case 3:
            $sql .= "and price >=3 and price <4 ";
            break;
        case 4:
            $sql .= "and price >=4  ";
            break;
        case 5:
            $sql .= "and price >=100 and price <200 ";
            break;
        case 6:
            $sql .= "and price >=200 and price <250 ";
            break;
        case 7:
            $sql .= "and price >=250 and price <300 ";
            break;
        case 8:
            $sql .= "and price >=300  ";
            break;
    }
}
if (isset($optradio) && $optradio == 0) {
    $sql .=" and forsale='0' ";
} else {
    $sql .=" and forsale='1' ";
}
if (!isset($page)) {
    $page = 0;
}
$totalinpage = 5;
$total = mysql_num_rows(mysql_query("$sql"));
$totalpage = $total / $totalinpage;
$start = $page * $totalinpage;
$sql.=" order by id desc limit {$start},{$totalinpage}";
//echo $sql; exit;
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $product[$i] = $fetch;
    $i++;
}



$title = 'New House';
if (isset($rule)) {
    switch ($rule) {
        case 0:
            $title = 'For Rent';
            break;
        case 1:
            $title = 'For Sale';
            break;
    }
}
//var_dump($product); 
?>
