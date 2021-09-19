<?php
class student {
    private $first_name;
    private $last_name;

    private function setName($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        // echo "Hello";
    }

    // public function __call($method, $args) {
    //     echo "This is private or Non existing method : $method";
    //     echo "<pre>";
    //     print_r($args);
    // }

    public function __call($method, $args) {
        if(method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);

        }else {
            echo "Method does not exist : $method";
        }
    }

}

$test = new student();

// $test->setName("Abu", "Motaleb");
// $test->personal("Abu", "Motaleb");

$test->setName("Abu", "Motaleb");

echo "<pre>";
print_r($test);






?>