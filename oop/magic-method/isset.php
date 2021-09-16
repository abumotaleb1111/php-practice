<?php
class student {
    public $course;
    private $first_name;
    private $last_name;
    private $data = ["name" => "Arfa", "age" => "20"];

    public function setName($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // public function __isset($property) {
    //     echo isset($this->$property);
    // }

    public function __isset($name) {
        echo isset($this->data[$name]);
    }

}

$test = new student();

// $test->course = "PHP";

$test->setName("Abu", "Motaleb");

// echo isset($test->first_name);

echo isset($test->name);
echo "<br>";
echo empty($test->age);
echo "<br>";



?>