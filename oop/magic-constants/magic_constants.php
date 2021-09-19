<?php

echo "Line Number : ". __LINE__ ."<br>";
echo "Full path of this file is : ". __FILE__ ."<br>";
echo "Full path of this directory is : ". __DIR__ ."<br>";

function myFunction() {
    echo "The function name is : ". __FUNCTION__;
}

myFunction();



?>