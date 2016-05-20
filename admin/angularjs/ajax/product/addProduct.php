<?php

include('../includes/config.php');
extract($_POST);

$image_name=null;

$path="/img/product/";
$image=$_FILES['image'];
$image_name=null;


if($image['tmp_name']==null){
    
    echo '100';exit;
}else{
    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    $valid_exts = array('jpeg', 'jpg', 'png', 'gif');
    if(!in_array( $ext,$valid_exts)){
        echo '101';exit;
    }
    $image_name=  "product_".date("Ymdhis").".".$ext;
    move_uploaded_file($image['tmp_name'],dirname(dirname(dirname(dirname(dirname(__FILE__))))).$path.$image_name);
    
    
}

$query="insert into product (id,idcategory,idlocation,name,namevi,adress,datepost,image,price,bathroom,bedroom,forsale,hot,square,description,descriptionvi,map,delete_flg) value(";
$query.="null,";
$query.="'".$idcategory."',";
$query.="'".$idlocaion."',";
$query.="'".$name."',";
$query.="'".$namevi."',";
$query.="'".$adress."',";
$query.="CURDATE(),";
$query.="'".$image_name."',";
$query.="'".$price."',";
$query.="'".$bathroom."',";
$query.="'".$bedroom."',";
$query.="'".$forsale."',";
$query.="'".$hot."',";
$query.="'".$square."',";
$query.="'".$description."',";
$query.="'".$descriptionvi."',";
$query.="'".$map."',";
$query.="'0'";
$query.=")";

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result = $mysqli->affected_rows;
 
$json_response = json_encode($result);


 