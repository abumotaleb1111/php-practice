<?php
class base {
    public static $name = "Abu Motaleb";

}

class derived extends base {
    public static function show() {
        echo parent::$name;
    }

}

// echo base::$name;

// $test = new base();

// $test->show();

// $test = new derived();

// $test->show();

derived::show();




?>