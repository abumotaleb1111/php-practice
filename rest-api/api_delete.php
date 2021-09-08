<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
// header('Access-Control-Allow-Headers:
//         Access-Control-Allow-Headers,
//         Content-Type,
//         Access-Control-Allow-Methods,
//         Authorization,
//         x-requested-with');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

include "config.php";

$sql = "DELETE FROM students_info WHERE id = '$id' ";

if(mysqli_query($conn, $sql)) {
    echo json_encode(array("message" => "Data Deleted Successfully.", "status" => true));

}else {
    echo json_encode(array("message" => "Data Can't Delete.", "status" => false));
}


?>