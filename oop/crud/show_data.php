<?php
include "database.php";

$obj = new Database();

// Select 
$obj->select('students_info', '*', null, null, null, 2);
$result = $obj->getResult();

echo "<table border='1' width='500px'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
     ";

foreach ($result as list("id" => $id, "name" => $name, "age" => $age, "city" => $city)) {
    echo "<tr><td>$id</td> <td>$name</td> <td>$age</td> <td>$city</td></tr>";
}

echo "</table>";

// Pagination 
$obj->pagination('students_info', null, null, 2);



?>