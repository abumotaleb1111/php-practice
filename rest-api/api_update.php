<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
// header('Access-Control-Allow-Headers:
//         Access-Control-Allow-Headers,
//         Content-Type,
//         Access-Control-Allow-Methods,
//         Authorization,
//         x-requested-with');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$age = $data['age'];
$city = $data['city'];

include "config.php";

$sql = "UPDATE students_info SET name = '$name', age = $age, city = '$city' WHERE id = '$id' ";

if(mysqli_query($conn, $sql)) {
    echo json_encode(array("message" => "Data Updated Successfully.", "status" => true));

}else {
    echo json_encode(array("message" => "Data Can't Update.", "status" => false));
}


?>