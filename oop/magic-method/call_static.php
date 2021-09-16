<?php
class student {
    private static function hello() {
        echo "This is hello method";
    }

    // public static function __callStatic($method, $args) {
    //     echo "This is a private method : $method";
    // }

    public static function __callStatic($method, $args) {
        if(method_exists(__class__, $method)) {
            call_user_func_array([__class__, $method], $args);

        }else {
            echo "Method does not exist : $method";
        }

    }


}

// student::hello();

student::hello();



?>