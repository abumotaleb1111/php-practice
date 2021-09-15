<?php
class base {
    protected static $name = "Arfa";

    public function show() {
        echo static::$name;
    }

}

class derived extends base {
    protected static $name = "Motaleb";
}

$test = new derived();

$test->show();



?>