<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/14/2016
 * Time: 6:04 PM
 */


$id = $_POST['id'];
$val = $_POST['val'];
$upd = 'update  expense.expense_category_users set name="'.$val.'" where id = '.$id;
require_once("./db.php");
$sth = $dbh->prepare($upd);
$sth->execute();
?>