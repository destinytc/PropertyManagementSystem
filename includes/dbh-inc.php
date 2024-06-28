<?php

$dsn = "mysql:host=localhost:3307;dbname=property_management_system";
$dbusername = "root";
$dbpassword= "";


try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExceptioon $e){

    echo"Connection failed: " . $e->getMessage();


}