<?php
$db_name = "mysql:host=localhost;port=3308;dbname=php_practice";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);


// $sql = $conn->prepare("UPDATE students_info SET city='Dinajpur' WHERE city = 'Delhi' ");

// $sql->execute();

// echo $sql->rowCount(); //It shows how many rows are effected


// $sql = "UPDATE students_info SET city='Sylhet' WHERE city = 'Dinajpur' ";

// $result = $conn->exec($sql); //It shows how many rows are effected

// echo $result;


$sql = $conn->prepare("INSERT INTO students_info (name, age, city) VALUES (?, ?, ?)");

$sql->execute(["Amir Khan", "35", "Mumbai"]);

echo $conn->lastInsertId();

?>