<?php

require_once ("mysqli/mysqli.php");


function addBrands(){

$brands = file("brands.txt"); // Открываем файл в режиме чтения

$db = DataBase::getDB(); // Создаём объект базы данных

foreach ($brands as $brand) {

	$query = "INSERT INTO `brands` (`brand`) VALUES ({?})";

	if($db->query($query, array($brand))) {
			echo "$brand сохранен!<br />";
	} else {
		echo "Добавить $brand не удалось!<br />";
	}
 }
}

// $db = DataBase::getDB(); // Создаём объект базы данных
// $db->updateFields ("brands", array("popular"), array(1), "rus = 0");

?>