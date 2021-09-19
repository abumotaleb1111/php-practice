<?php
include "database.php";

$obj = new Database();

// Insert 
// $obj->insert('students_info', ['name' => 'Ritika', 'age' => '21', 'city' => 'Goa']);
// echo "Insert result is : ";
// echo "<pre>";
// print_r($obj->getResult());

// Update 
// $obj->update('students_info', ['name' => 'Amir', 'age' => '34', 'city' => 'Delhi'], 'id="15"');
// echo "Update result is : ";
// echo "<pre>";
// print_r($obj->getResult());

// Delete 
// $obj->delete('students_info', 'id="2"');
// echo "Delete result is : ";
// echo "<pre>";
// print_r($obj->getResult());

// SQL 
// $obj->sql('SELECT * FROM students_info');
// echo "SQL result is : ";
// echo "<pre>";
// print_r($obj->getResult());

// Select 
$obj->select('students_info', '*', null, null, null, 2);
echo "Select result is : ";
echo "<pre>";
print_r($obj->getResult());

// Pagination 
$obj->pagination('students_info', null, null, 2);



?>