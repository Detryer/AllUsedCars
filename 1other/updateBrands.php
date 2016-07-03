<?php

require_once ("mysqli/mysqli.php");

$db = DataBase::getDB();

$select = "SELECT `brand` FROM `brands` WHERE {?}";
$result = $db->select($select, array(1));

foreach($result as $brands){
	$brand = ucwords(strtolower($brands['brand']));
	$update = "UPDATE `brands` SET `brand`={?} WHERE `brand`={?}";
	$db->query($update, array($brand, $brands['brand']));
}

?>