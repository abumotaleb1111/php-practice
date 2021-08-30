<?php
$var = "(abumotaleb)1111/@gmail.com";

$var = filter_var($var, FILTER_SANITIZE_EMAIL);

if(filter_var($var, FILTER_VALIDATE_EMAIL)) {
    echo "$var is a valid email!<br>";
}else {
    echo "$var is not a valid email!<br>";

}


$var = 10;
$var = 10.22;
$var = +45;
$var = "#4@%5";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);

if(filter_var($var, FILTER_VALIDATE_INT)) {
    echo "$var is an Integer!<br>";
}else {
    echo "$var is not an Integer!<br>";

}


$var = 10.22;

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

if(filter_var($var, FILTER_VALIDATE_FLOAT)) {
    echo "$var is Float!<br>";
}else {
    echo "$var is not Float!<br>";

}


$var = "1,50,000";

$var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

if(filter_var($var, FILTER_VALIDATE_FLOAT)) {
    echo "$var is Float!<br>";
}else {
    echo "$var is not Float!<br>";

}


$var = "Bird's eye";

echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES);


$var = "<h1>Life is short & the art long █ █</h1>";

echo filter_var($var, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH);








?>