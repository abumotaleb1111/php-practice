<?php
$num = 10;

// var_dump(filter_var($num, FILTER_VALIDATE_INT));


if(filter_var($num, FILTER_VALIDATE_INT)) {
    echo "$num is an Integer.<br>";
}else {
    echo "$sum is not an Integer.<br>";

}


$num = 20;

$options = array(
    "options" => array(
        "min_range" => 18,
        "max_range" => 22
    )
);

if(filter_var($num, FILTER_VALIDATE_INT, $options)) {
    echo "$num is valid Number.<br>";
}else {
    echo "$num is not valid Number.<br>";

}


$num2 = 30;
// $num2 = 30.33;
// $num2 = "30";
// $num2 = True;
// $num2 = "Hi";

if(filter_var($num2, FILTER_VALIDATE_FLOAT)) {
    echo "$num2 is Float.<br>";
}else {
    echo "$num2 is not Float.<br>";

}


$var = True;        //Boolean
$var = "yes";       //Boolean
$var = 1;           //Boolean
$var = "1";         //Boolean
$var = False;       //Not Boolean
$var = "off";       //Not Boolean
$var = 0;           //Not Boolean

if(filter_var($var, FILTER_VALIDATE_BOOLEAN)) {
    echo "$var is Boolean.<br>";
}else {
    echo "$var is not Boolean.<br>";

}


$email = "abumotaleb1111@gmail.com";        //Valid email
// $email = "abumotaleb1111gmail.com";        //Not valid email
// $email = "abumotaleb 1111@gmail.com";        //Not valid email

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is a valid email!<br>";
}else {
    echo "$email is not a valid email!<br>";

}


$web_url = "https://www.abumotaleb.42web.io";        //Valid web url
// $web_url = "abumotaleb.42web.io";        //Not valid url

if(filter_var($web_url, FILTER_VALIDATE_URL)) {
    echo "$web_url is a valid web url!<br>";
}else {
    echo "$web_url is not a valid web url!<br>";

}




























?>