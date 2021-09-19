<?php
trait myTrait {
    public function myMethod() {

    }

}

if(trait_exists('myTrait')) {
    // echo "This trait is exist.";
    class myClass {
        use myTrait;
    }

}else {
    echo "This trait is not exist.";
}

?>