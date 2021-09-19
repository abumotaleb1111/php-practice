<?php
class myClass {
    public $name;
}

class parentClass {

}

class childClass extends parentClass {

}

// if(property_exists('myClass', 'name')) {
//     echo "This property is exist.";

// }else {
//     echo "This property is not exist.";
// }

$obj = new myClass();

// if(is_a( $obj, 'myClass')) {
//     echo "This Object is of class myClass.";

// }else {
//     echo "This Object is not of class myClass.";
// }

$child_obj = new childClass();

if(is_a( $child_obj, 'parentClass')) {
    echo "This Object is a object of subclass of parentClass.";

}else {
    echo "This Object is not a object of subclass of parentClass.";
}

?>