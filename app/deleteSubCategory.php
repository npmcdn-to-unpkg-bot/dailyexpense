<?php
/**
 * Created by PhpStorm.
 * User: gry26020052003
 * Date: 7/2/2016
 * Time: 10:43 PM
 */


echo 'adf';
$id = $_POST['id'];
$del = 'delete from expense.expense_subcategory_users where id = '.$id;
echo $del;
exit;
require_once("./db.php");
$sth = $dbh->prepare($del);
$sth->execute();



?>