<?php
    include 'config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM student_details WHERE id = $id";

    $queryResult = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://localhost:8080/crud/index.php");

    mysqli_close($conn);

