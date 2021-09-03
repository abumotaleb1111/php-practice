<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Connection Failed!");

$id = $_POST['id'];

$sql = "DELETE FROM students WHERE id = '$id' ";

if(mysqli_query($conn, $sql)) {
    echo 1;
}else {
    echo 0;
}






?>