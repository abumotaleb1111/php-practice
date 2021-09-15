<?php
class abc {
    private $name = "Abu Motaleb";

    public function __get($property) {
        echo "You are trying to access Non Existing or Prive property".$prpperty;
    }

}


$test = new abc();

$test->name;



?>