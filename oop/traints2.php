<?php
trait hello {
    public function sayHello() {
        echo "Hello from hello trait\n";
    }
}

trait hi {
    public function sayHello() {
        echo "Hello from hi trait\n";
    }
}

class base {
    use hello, hi {
        hello::sayHello insteadOf hi;
        hi::sayHello as newHello;
    }
    // public function sayHello() {
    //     echo "Hello from base class";
    // }
}

// class child extends base {
//     use hello;

//     public function sayHello() {
//         echo "Hello from child class";
//     }

// }


// $test = new child();

// $test->sayHello();

$test = new base();

$test->sayHello();
$test->newHello();


?>