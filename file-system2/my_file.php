<?php
// echo file_put_contents("readme.txt", "Hello, guys! how are you?");
// echo file_put_contents("readme.txt", "Bangladesh", FILE_APPEND);
// echo file_put_contents("readme.txt", "Bangladesh", FILE_APPEND | LOCK_EX);

// echo file_get_contents("readme.txt", FALSE, NULL, 0, 20);
echo file_get_contents("readme.txt", FALSE, NULL, 20, 50);


echo "<pre>";
print_r(glob("*"));

echo "<pre>";
print_r(glob("css/*"));

echo "<pre>";
print_r(glob("*.php"));

echo "<pre>";
print_r(glob("*ins*"));

echo "<pre>";
print_r(glob("[st]*"));

echo "<pre>";
print_r(glob("*[st]*"));


echo "<pre>";
print_r(glob("*", GLOB_MARK));

echo "<pre>";
print_r(glob("k*", GLOB_NOCHECK));

echo "<pre>";
print_r(glob("*", GLOB_ONLYDIR));

echo "<pre>";
print_r(glob("{css/*, *.html}", GLOB_BRACE));










?>