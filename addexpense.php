<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/18/2016
 * Time: 2:32 PM
 */
$data = array();
!empty($_POST['name']) ? $data['name'] = $_POST['name'] : false;
!empty($_POST['category_id']) ? $data['category_id'] = $_POST['category_id'] : false;
!empty($_POST['subcategory_id']) ? $data['subcategory_id'] = $_POST['subcategory_id'] : false;
!empty($_POST['price']) ? $data['price'] = $_POST['price'] : false;

if(!empty($_POST['date'])){
  if(preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}+$/', $_POST['date'])){
    $pieces = explode("/",$_POST["date"]);
    $data["date"] = $pieces[2].'-'.$pieces[0].'-'.$pieces[1];
  }
}

!empty($_POST['notes']) ? $data['notes'] = $_POST['notes'] : false;
$data["user_id"]=2425;

$types = array("name" => PDO::PARAM_STR, "category_id"=>PDO::PARAM_INT, "user_id"=>PDO::PARAM_INT, "date"=>PDO::PARAM_STR,
"notes"=> PDO::PARAM_STR, "subcategory_id"=>PDO::PARAM_INT, 'price'=>PDO::PARAM_STR);

require_once("./db.php");
require_once("./dbFunct.php");
dbFunct::insert("expense.expense_users", $data, $types);
header("Location: ./");

?>