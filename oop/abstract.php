<?php
abstract class parentClass {
    public $name;

    abstract protected function calc($x, $y);

}


class childClass extends parentClass {
    public function calc($a, $b) {
        echo $a + $b;
    }

}

$test = new childClass();

$test->calc(2, 5);



?>