<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/15/2016
 * Time: 4:49 PM
 */




require_once("db.php");
require_once("dbFunct.php");
$data = array("name"=>$_POST["val"]);
$where = array("id"=>$_POST["id"]);
$types = array("id"=>PDO::PARAM_INT, "name"=>PDO::PARAM_STR);
dbFunct::update("expense.expense_subcategory_users", $data, $where, $types)



?>