<?php
interface test {

}

trait testTrait {

}

class myClass {
    use testTrait;
    public $var1;
    public $var2 = "Hello";
    public $var3 = 100;
    private $var4;

    public function __construct() {
        $this->var1 = "Wow";
        echo "<pre>";
        print_r(get_class_vars(get_class($this)));
    }
}

class_alias("myClass", "mc"); //now we can make object using "mc" as myClass's ...

$myClass_obj = new myClass();

$class_vars = get_class_vars(get_class($myClass_obj));
echo "<pre>";
print_r($class_vars);

$class_vars2 = get_object_vars($myClass_obj);
echo "<pre>";
print_r($class_vars2);


class abc {
    static public function test() {
        var_dump(get_called_class());
    }
}

class xyz extends abc {

}

abc::test();
xyz::test();

print_r(get_declared_classes());
print_r(get_declared_interfaces());
print_r(get_declared_traits());


?>