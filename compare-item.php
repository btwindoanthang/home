<?php
session_start();

require_once(dirname(__FILE__) . '/libs/database.php');
if ($_SESSION['lang'] == 1) {
    require_once(dirname(__FILE__) . '/libs/lang/en.php');
} else {
    require_once(dirname(__FILE__) . '/libs/lang/vi.php');
}

$dbClass = new Database();
$db = $dbClass->connect();
$product = array();
$tm_p = array();
$tm_p = $_POST['EID'];
$string = '';
if (count($tm_p) != 0) {
    foreach ($tm_p as $tm) {
        $string .= " or id = '$tm' ";
    }
}

$i = 0;
$productt = array();
$sql = "select * from product where id ='' ";
if (count($tm) != 0) {
   
    $sql.=$string;
}

$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $productt[$i] = $fetch;
    $i++;
}
?>
<div id="owl-example-2" class="block-2 owl-carousel1">
    <?php foreach ($productt as $p) { ?>
        <div class="block-child">
            <div class="block-main block-main-2">
                <a onclick="de_sel('<?php echo $p["id"] ?>', '<?php echo$p["image"] ?>')"><img src="img/product/<?php echo $p['image']; ?>" alt="" class="block-child-1"></a>
                <div class="block-child-2">
                    <ol class="ul-name">
                        <li><?php echo $p['adress']; ?> </li>
                        <li><?php echo $p['price']; ?> <?php if($p['forsale']==1){echo constant("BILLION").' '.constant("VND"); }else{ echo constant('USD');} ?></li>
                        <li><?php echo $p['square']; ?>m2</li>
                        <li>Bed: <?php echo $p['bedroom'];?> - Bath: <?php echo $p['bathroom']?></li>
                        <li><?php echo $p['id'];?></li>
                    </ol>
                </div>
            </div>
        </div>
    <?php } ?>            


</div>
