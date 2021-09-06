<?php
$json_string = "json/students.json";

$json_data = file_get_contents($json_string);

$array = json_decode($json_data, true);

// echo "<pre>";
// print_r($array);

echo "<table width='100%' border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Country</th>
        </tr>";

foreach($array as $arr) {
    echo "<tr>
              <td>{$arr['id']}</td>
              <td>{$arr['name']}</td>
              <td>{$arr['age']}</td>
              <td>{$arr['gender']}</td>
              <td>{$arr['country']}</td>
          </tr>";
}

echo "</table>";




?>