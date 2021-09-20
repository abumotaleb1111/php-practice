<?php
$db_name = "mysql:host=localhost;port=3308;dbname=php_practice";
$username = "root";
$password = "";

$conn = new PDO($db_name,$username,$password);

// $sql = $conn->query("SELECT * FROM students_info");
$city = "Saidpur";
$age = 18;

// $sql = $conn->prepare("SELECT * FROM students_info WHERE city = ? AND age >= ? ");
// $sql->bindParam(1, $city, PDO::PARAM_STR);
// $sql->bindParam(2, $id, PDO::PARAM_INT);
// $sql->execute();

$sql = $conn->prepare("SELECT * FROM students_info WHERE city = :city AND age >= :age ");
$sql->bindParam(':city', $city, PDO::PARAM_STR);
$sql->bindParam(':age', $age, PDO::PARAM_INT);
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result) > 0) {
    foreach($result as $row) {
        echo "{$row['name']} - {$row['age']} - {$row['city']} <br>";
    }
}else {
    echo "No Record Found";
}

// while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
//     echo "{$row['name']} - {$row['age']} - {$row['city']} <br>";

// }







?>