<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/15/2016
 * Time: 2:48 PM
 */

require_once("./db.php");
require_once("./dbFunct.php");
$data = array("name" => $_POST['subcategoryname'], "category_id"=>$_POST['category_id'], 'user_id'=>2425);
$types = array("name" => PDO::PARAM_STR, "category_id"=>PDO::PARAM_INT, "user_id"=>PDO::PARAM_INT);
dbFunct::insert("expense.expense_subcategory_users", $data, $types);
header("Location: ./");
exit;
?>