<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$sql = "INSERT INTO student_details(name, age, gender, country) VALUES('$name', $age, '$gender', '$country')";

if(mysqli_query($conn, $sql)) {
    echo "Hello ".$name.", your record is saved!";
}else {
    echo "Can't save data!";
}








?>