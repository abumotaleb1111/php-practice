<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice");

if(mysqli_connect_errno()) {
    echo "Failed to connect Database. ".mysqli_connect_error();
    exit();

}


$sql = "SELECT * FROM students";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed. ".mysqli_error($conn));

// mysqli_fetch_assoc_function
// $row = mysqli_fetch_assoc($queryResult);

// echo "<pre>";
// print_r($row);

while($row = mysqli_fetch_assoc($queryResult)) {
    // echo "<pre>";
    // print_r($row);
    echo $row['first_name']." ".$row['last_name']."<br>";

}


// mysqli_fetch_row_function
$sql = "SELECT * FROM students";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed. ".mysqli_error($conn));

while($row = mysqli_fetch_row($queryResult)) {
    // echo "<pre>";
    // print_r($row);
    echo $row[1]." ".$row[2]."<br>";

}


// mysqli_fetch_array_function
$sql = "SELECT * FROM students";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed. ".mysqli_error($conn));

while($row = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)) {
    // echo "<pre>";
    // print_r($row);
    echo $row['first_name']." ".$row['last_name']."<br>";
    
}


// mysqli_fetch_all_function
$sql = "SELECT * FROM students";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed. ".mysqli_error($conn));

$row = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($row);

foreach($row as $data) {
    echo $data['id']." ".$data["first_name"]." ".$data['last_name']."<br>";

}


// mysqli_affected_rows_function
$sql = "SELECT * FROM students";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed. ".mysqli_error($conn));

echo "Total affected rows: ".mysqli_affected_rows($conn);

 




















?>