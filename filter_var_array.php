<?php
$student = Array(
    "name" => "Abu Motaleb",
    "marks" => 80,
    "email" => "(abumotaleb//1111@gmail.com"
);

$filters = array(
    "name" => array(
        "filter" => FILTER_SANITIZE_STRING,
        "flags" => FILTER_FLAG_STRIP_HIGH
    ),
    "marks" => array (
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100,
        )
    ),
    "email" => FILTER_SANITIZE_EMAIL 
);

echo "<pre>";
print_r(filter_var_array($student, $filters));



















?>