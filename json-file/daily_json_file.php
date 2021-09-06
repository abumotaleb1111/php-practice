<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice") or die("Database Connection Failed!");

$sql = "SELECT * FROM students";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed!".mysqli_error($conn));

$output = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);

$file_name = "my-".date("d-m-Y").".json";

if(file_put_contents("json/$file_name", $json_data)) {
    echo $file_name. " file created!";
}else {
    echo "Can't insert data in JSON file.";
}











?>