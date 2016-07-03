<?php
/**
 * Created by PhpStorm.
 * User: gry26020052003
 * Date: 7/2/2016
 * Time: 10:43 PM
 */


date_default_timezone_set('America/Los_Angeles');
if(!empty($_POST['name'])){
    $data["name"] = trim($_POST['name']);
}
$data["user_id"] = 2425;
$data["datetime"] = date('Y-m-d H:i:s');
require_once("db.php");
require_once("dbFunct.php");
$types = array("name"=>PDO::PARAM_INT, "datetime"=>PDO::PARAM_STR, "user_id"=>PDO::PARAM_INT);
dbFunct::insert("expense.expense_category_users", $data, $types);
header("Location: ./");
exit;


?>