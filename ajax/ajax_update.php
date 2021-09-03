<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$id = $_POST['id']; 
$first_name = $_POST['first_name']; 
$last_name = $_POST['last_name']; 

$sql = "UPDATE students SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id' ";

if(mysqli_query($conn, $sql)) {
    echo 1;
}else {
    echo 0;
}




?>