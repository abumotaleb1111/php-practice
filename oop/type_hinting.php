<?php
function sum(int $value) {
    echo $value + 10;
}

// sum(5);


function fruits(array $names) {
    foreach($names as $name) {
        echo $name . "<br>";
    }
}

$fruits_name = ["Apple", "Banana", "Orange"];

// fruits($fruits_name);


class hi {
    public function sayHi() {
        echo "Hi!";
    }
}

class hello {
    public function sayHello() {
        echo "Hello!";
    }
}

function wow(hi $x) {
    $x->sayHi();
}

$test = new hi();

wow($test);



?>