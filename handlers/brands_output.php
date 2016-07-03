<?php
require_once ("mysqli/mysqli.php");

class Brands {

    static function popular($count = 0, $perrow = 11) {

        $perrow = ($count == 0) ? $perrow : (($perrow > $count) ? $count : (($count > 33) ? $count/3 : $perrow));


    $db = DataBase::getDB(); // Создаём объект базы данных
    $limit = ($count == 0) ? "" : "LIMIT $count";
    $query = "SELECT `brand` FROM `brands` WHERE `popular` = {?} $limit";
    $result = $db->select($query, array(1));

    foreach($result as $count=>$brands) {
        $brand = $brands['brand'];

        switch ($brand) {
        case "Gaz":
            $brand = "ГАЗ";
            break;
        case "Vaz":
            $brand = "ВАЗ";
            break;
        case "Uaz":
            $brand = "УАЗ";
            break;
        default:
        $brand = strtoupper($brand);
            break;
        }

        $url = strtolower($brands['brand']);
        $img = ucfirst($url) . ".png";

        if ($count % $perrow == 0 && $count != 0) {
            echo "</ul><ul>";
        }
            echo "<li><a href='http://detryer.tk/cars/?brand={$url}'><img src='../img/brands/{$img}' alt='{$brand}'><p>{$brand}</p></li></a>";
    }
}

}

?>