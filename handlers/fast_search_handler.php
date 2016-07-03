<?php

require_once("../mysqli/mysqli.php");

class Search {

    public static function filter($field, $table, $where = false) {
        $db = DataBase::getDB();
        $query = "SELECT `{$field}` FROM `{$table}` WHERE `show` = {?}";
        $query .= ($where) ? " AND $where" : "";
        $results = $db->select($query, array(1));

        foreach ($results as $result) {
            $option = strtolower($result[$field]);
            $selected = "";

            if (isset($_GET[$field])) {
                if ($_GET[$field] == $option) {
                    $selected = "selected";
                }
            }
            echo "<option value='{$option}' {$selected}>{$result[$field]}</option>";
        }
    }
}

?>