<?php
interface parent1 {
    function calc($x, $y);
}

interface parent2 {
    function sub($x, $y);
}

class childClass implements parent1, parent2 {
    public function calc($x, $y) {
        echo $x * $y;
    }

    public function sub($x, $y) {
        echo $x - $y;
    }

}


$test = new childClass();

$test->calc(5, 2);
echo "<br>";
$test->sub(5, 2);


?>