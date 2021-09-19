<?php
class myClass {
    // function name() {
    //     echo "Class Name : ".get_class($this)."<br>";
    // }

    public function __construct() {
        print_r(get_class_methods($this));
    }

    function myFunction1() {
        
    }

    private function myFunction2() {

    }

}

$cons_obj = new myClass();

class abc {

}

class xyz extends abc {
    function name() {
        echo "Parent Class Name : ".get_parent_class($this)."<br>";
    }
}

// $myClass_obj = new myClass();
// $obj->name();
// echo "Class Name : ".get_class($myClass_obj)."<br>";

$obj = new xyz();
$obj->name();
echo "Parent Class Name : ".get_parent_class('xyz')."<br>";

$class_methods = get_class_methods('myClass');
echo "<pre>";
print_r($class_methods);
foreach ($class_methods as $class_method) {
    echo $class_method."<br>";
}


?>