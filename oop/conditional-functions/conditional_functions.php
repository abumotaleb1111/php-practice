<?php
interface myInterface {
    public function calc();
}

class myClass {
    public function myMethod() {

    }

}

if(class_exists('myClass')) {
    // echo "This class is exist.";
    $obj = new myClass();

}else {
    echo "This class is not exist.";
}

if(interface_exists('myInterface')) {
    // echo "This interface is exist.";
    class newClass implements myInterface {
        public function calc() {
            echo 5 + 5;
        }
    }

}else {
    echo "This interface is not exist.";
}

$obj = new myClass();

if(method_exists($obj, 'myMethod')) {
    echo "This method is exist";
}else {
    echo "This method is not exist";
}



?>