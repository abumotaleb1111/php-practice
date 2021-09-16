<?php
class abc {
    private $name;

    public function __get($property) {
        echo "You are trying to access Non existing or Private property : ".$property."<br>";
    }

    public function __set($property, $value) {
        if(property_exists($this, $property)) {
            $this->$property = $value;
        }else {
            echo "Property does not exist.<br>";
        }
    }

}

$test = new abc();

// echo $test->name = "Arfa";
$test->age = 20;


?>