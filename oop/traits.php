<?php
trait hello {
    public function sayHello() {
        echo "Hello Everyone";
    }

    public function sayHi() {
        echo "Hi Everyone";
    }
}

trait bye {
    public function sayBye() {
        echo "Bye Bye Everyone";
    }
}

class base {
    use hello, bye;
}

class base2 {
    use hello, bye;
}


$test = new base();
$test2 = new base2();

$test->sayHello();
echo "<br>";
$test->sayBye();
echo "<br>";

$test2->sayHello();



?>