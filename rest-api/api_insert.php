<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:
        Access-Control-Allow-Headers,
        Content-Type.
        Access-Control-Allow-Methods
        Authorization,
        x-requested-with');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$age = $data['age'];
$city = $data['city'];

include "config.php";

$sql = "INSERT INTO students_info(name, age, city) VALUES('$name', $age, '$city')";

if(mysqli_query($conn, $sql)) {
    echo json_encode(array("message" => "Data Saved Successfully.", "status" => true));

}else {
    echo json_encode(array("message" => "Data Can't Save.", "status" => false));
}


?>