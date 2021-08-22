<?php
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $group_name = $_POST['group_name'];
    
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Database connection failed!");

    $sql = "INSERT INTO student_details (roll, name, age, group_name) VALUES ('$roll', '$name', '$age', '$group_name')";

    $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://localhost:8080/crud/index.php");

    mysqli_close($conn);



