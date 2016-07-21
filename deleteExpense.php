<?php
/**
 * Created by PhpStorm.
 * User: gry260
 * Date: 7/20/2016
 * Time: 6:37 PM
 */

$id = $_GET['id'];
$q = 'delete from expense.expense_users where id ='.$id;
require_once("./db.php");
$sth = $dbh->prepare($q);
$sth->execute();

header("Location: ./");
exit;



?>