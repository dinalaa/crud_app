<?php

$dsn = 'mysql:host=localhost;dbname=crud_app';
$user = 'root';
$password = '';
try {
    $conn = new PDO($dsn, $user, $password);
} catch(PDOException $e){
    echo 'failed ' . $e -> getMessage();
}
