<?php
class person{
    // public $name = "No Name";
    // public $age = 0;

    function __construct($name = "No Name", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    function show() {
        echo $this->name . " - " . $this->age ."<br>";
    }

}

$p1 = new person("Arfa", 20);

// $p1->name = "Abu Motaleb";
// $p1->age = 21;

$p1->show();

$p2 = new person("Mim", 22);

$p2->show();











?>