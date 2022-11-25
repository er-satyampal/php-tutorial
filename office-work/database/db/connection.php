<?php

$host = '127.0.0.1';
$db = 'school';
$username='root';
$password=' ';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo = new PDO($dsn, $user, $password);

    echo"Hello Database";
}catch(PDOException $e){
     throw new PDOException($e->getMessage());
}



?>