<?php
class student {
    public $name;
    public $course;

    public function __construct($n) {
        $this->name = $n;
    }

    public function setCourse(course $c) {
        $this->name = $n;
    }

}

class course {
    public $cname;

    public function __construct($cn) {
        $this->cname = $cn;
    }

}

$student1 = new student("Abu Motaleb");

$student2 = clone $student1;

$student2->name = "Ahsan Jibon";

echo $student1->name;
echo $student2->name;



?>