<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";

$sql = "SELECT * FROM students_info";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed!".mysqli_error($conn));

if(mysqli_num_rows($queryResult) > 0) {
    $output = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);
    
    echo json_encode($output);

}else {
    echo json_encode(array("message" => "No Record Found.", "status" => false));
}


?>