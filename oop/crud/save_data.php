<?php
include "database.php";

$obj = new Database();

$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

$value = ["name" => $name, "age" => $age, "city" => $city];

if($obj->insert("students_info", $value)) {
    echo "<h2>Data Inserted Successfully</h2>";
    
}else {
    echo "<h2>Data Is Not Inserted Successfully</h2>";
}


?>