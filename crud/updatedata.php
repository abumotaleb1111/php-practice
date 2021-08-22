<?php
    $id = $_POST['id'];
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $group_name = $_POST['group_name'];
    
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Database connection failed!");

    $sql = "UPDATE student_details SET roll = '$roll', name = '$name', age = '$age', group_name = '$group_name' WHERE id = $id ";

    $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://localhost:8080/crud/index.php");

    mysqli_close($conn);



