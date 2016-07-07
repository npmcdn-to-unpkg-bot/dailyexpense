<?php

$dsn = 'mysql:dbname=expense;host=localhost; port=8888';
$user = 'test';
$password = 'rena19891022';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}




