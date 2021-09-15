<?php
class base{
    private $name;

    public function __construct($n) {
        $this->name = $n;
    } 
    
    public function show() {
        echo "Name : ". $this->name ."<br>";
    }

}

class derived extends base {
    public function get() {
        echo "Name : ". $this->name ."<br>";
    }

}


$b = new base("Abu Motaleb");

// $b->name = "Ahsan Jibon";

// $b->show();

$d = new derived("Ashikur");

$d->name = "Ahsan Jibon";

$d->get();



?>