<?php
namespace myNamespace;

class myClass {
    public function getClassName() {
        return __CLASS__ ."<br>";
    }

    public function getMethodName() {
        return __METHOD__ . "<br>";
    }

    public function getNamespace() {
        return __NAMESPACE__ . "<br>";
    }


}

$obj = new myClass();

echo $obj->getClassName();

echo $obj->getMethodName();

echo $obj->getNamespace();



?>