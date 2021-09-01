<?php
// echo getcwd()."<br>";

// chdir("css");

// echo getcwd()."<br>";

// $dir = ".";
// $dir = "css/";
$dir = getcwd();

echo "<pre>";
print_r(scandir($dir));

echo "<pre>";
print_r(scandir($dir, 1));


$dir = ".";

if(is_dir($dir)) {
    if($d = opendir($dir)) {
        while($file = readdir($d)) {
            echo "Filename: ".$file."<br>";
        }
        closedir($d);
    }
}







?>