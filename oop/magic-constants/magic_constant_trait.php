<?php
trait myTrait {
    public function getTraitName() {
        return __TRAIT__;
    }
}

class myClass {
    use myTrait;

}

$obj = new myClass();

echo $obj->getTraitName();



?>