<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_practice";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection Failed. ".$conn->mysqli_error);
}

$sql = "SELECT * FROM students_info";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']} - Name: {$row['name']} - Age: {$row['age']} - City: {$row['city']} <br>";
    }

}else {
    echo "No result found.";
}











?>