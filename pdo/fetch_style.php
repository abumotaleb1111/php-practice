<?php
$db_name = "mysql:host=localhost;port=3308;dbname=php_practice";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);


// $sql = $conn->prepare("SELECT * FROM students_info");

// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_COLUMN, 1);


// $sql = $conn->prepare("SELECT city, name, age FROM students_info");

// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);


// $sql = $conn->prepare("SELECT city, name, age FROM students_info");

// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);


// $sql = $conn->prepare("SELECT name, city FROM students_info");

// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_KEY_PAIR);


$sql = $conn->prepare("SELECT * FROM students_info");

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_CLASS);


echo "<pre>";
print_r($result);













?>