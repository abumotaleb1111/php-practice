<?php
class abc {
    // private $name = "Abu Motaleb";
    private $data = ["name" => "Arfa", "age" => "20", "city" => "Sylhet"];

    // public function __get($property) {
    //     echo "You are trying to access Non Existing or Prive property".$property;
    // }

    public function __get($key) {
        if(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }else {
            return "This key($key) is not defined.";
        }
    }

}


$test = new abc();

// $test->name;
// echo "<pre>";
// print_r($test->data);

echo $test->city;



?>