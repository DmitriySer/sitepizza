<?php

$user ='root' ;
$pass='';
$dbName ='test';

try {
    $dbh = new PDO("mysql:host=localhost;dbname=$dbName", $user, $pass);
} catch (PDOException $e) {
    die($e->getMessage());
}
