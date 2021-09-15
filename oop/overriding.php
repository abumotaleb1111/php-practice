<?php
class base {
    public $name = "Abu Motaleb";

    public function calc($x, $y) {
        return $x * $y;
    }

}


class derived extends base {
    public $name = "Ahsan Jibon";

    public function calc($x, $y) {
        return $x + $y;
    }
}


// $test = new base();
$test = new derived();

// echo $test->name;

echo $test->calc(5, 5);



?>