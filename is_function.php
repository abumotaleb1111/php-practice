<?php
$var = 12;

// echo is_int($var)."<br>";

var_dump(is_int($var));

echo "<br>";

if(is_int($var)) {
    echo "$var is an Integer.<br>";
}else {
    echo "$var is not an Integer.<br>";
}


$var = 10.2;

if(is_int($var)) {
    echo "$var is an Integer.<br>";
}else {
    echo "$var is not an Integer.<br>";
}


$var = 10;

if(is_integer($var)) {
    echo "$var is an Integer.<br>";
}else {
    echo "$var is not an Integer.<br>";
}


$var = 20;

if(is_long($var)) {
    echo "$var is Long/Integer.<br>";
}else {
    echo "$var is not Long/Integer.<br>";
}


$var = 10.5;

if(is_float($var)) {
    echo "$var is Float.<br>";
}else {
    echo "$var is not Float.<br>";
}


$var = 10;

if(is_float($var)) {
    echo "$var is Float.<br>";
}else {
    echo "$var is not Float.<br>";
}


$var = 20.11;

if(is_double($var)) {
    echo "$var is Double/Float.<br>";
}else {
    echo "$var is not Double/Float.<br>";
}


$var = 20;

if(is_real($var)) {
    echo "$var is an Real/Float.<br>";
}else {
    echo "$var is not Real/Float.<br>";
}


$var = "One Thousand";

if(is_string($var)) {
    echo "$var is String.<br>";
}else {
    echo "$var is not String.<br>";
}


$var = 1000;

if(is_string($var)) {
    echo "$var is String.<br>";
}else {
    echo "$var is not String.<br>";
}


$var = true;

if(is_bool($var)) {
    echo "$var is Boolean.<br>";
}else {
    echo "$var is not Boolean.<br>";
}


$var = "Hello";

if(is_bool($var)) {
    echo "$var is Boolean.<br>";
}else {
    echo "$var is not Boolean.<br>";
}


$var = NULL;

if(is_null($var)) {
    echo "$var is Null.<br>";
}else {
    echo "$var is not Null";
}


$fruits = array("Apple", "Banana", "Orange");

if(is_array($fruits)) {
    echo "<pre>";
    print_r($fruits);
}else {
    echo "Fruits is not an Array";
}


$name = "Ahsan";

if(is_array($name)) {
    echo "<pre>";
    print_r($name);
}else {
    echo "$name is not an Array";
}














?>