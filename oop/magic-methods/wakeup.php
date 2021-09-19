<?php
class student {
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname) {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep() {
        return array("first_name", "last_name");
    }

    public function __wakeup() {
        echo "This is a wakeup method";
    }

    
}

$obj = new student();

$obj->setName("Abu", "Motaleb");

$srl = serialize($obj);

$unsrl = unserialize($srl);

echo $unsrl;



?>