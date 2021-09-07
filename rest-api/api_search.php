<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);

$search_value = $data['search'];

include "config.php";

$sql = "SELECT * FROM student_details WHERE name LIKE '%$search_value%' ";

$queryResult = mysqli_query($conn, $sql) or die("Query Failed!".mysqli_error($conn));

if(mysqli_num_rows($queryResult) > 0) {
    $output = mysqli_fetch_all($queryResult, MYSQLI_ASSOC);
    
    echo json_encode($output);

}else {
    echo json_encode(array("message" => "No Search Found.", "status" => false));
}


?>