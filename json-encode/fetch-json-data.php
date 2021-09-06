<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Database Connection Failed!");

$sql = "SELECT * FROM student_details";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed!".mysqli_error($conn));

$output = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);

echo json_encode($output);











?>