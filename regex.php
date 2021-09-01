<?php
$string = "PHP is the web scripting php language of 122 choice.";

$exe = preg_match_all("/[^a-d2-5]/i", $string, $array);

if($exe) {
    echo "Matched<br>";
}else {
    echo "Not matched<br>";

}


echo "<pre>";
print_r($array);


 $string = "PHP is the web scripting php language of choice.";

 $pattern = "/PHP/i";

 $replacement = "JavaScript";

 echo preg_replace($pattern, $replacement, $string)."<br>";


 $string = "April 10, 2021";

 $pattern = "/(\w+) (\d+), (\d+)/i";

 $replacement = "$1 20, $3";

 echo preg_replace($pattern, $replacement, $string)."<br>";


 $string = "PHP is the web scripting php language of choice.";

 $split = preg_split("/[\s]+/", $string);

 echo "<pre>";
 print_r($split);

















?>