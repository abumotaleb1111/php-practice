<?php
class student {
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function __unset($property) {
        unset($this->$property);
    }

}

$test = new student();

$test->setName("Abu", "Motaleb");

unset($test->first_name);
echo "<pre>";
print_r($test);



?>