<?php
$file = "readme.txt";

if(file_exists($file)) {
    // echo readfile("readme.txt");
    // echo readfile($file);
    // copy($file, "copy_file.txt");
    // copy($file, "hello.txt");
    // rename("copy_file.txt", "new_file.text");
    // unlink("hello.txt");

}else {
    echo "File does not exist.<br>";
    
}


if(!file_exists("new-folder")) {
    mkdir("new-folder");
}else {
    echo "Folder already exist.<br>";

}


echo filesize($file)."<br>";
echo filetype($file)."<br>";
echo filetype("new-folder")."<br>";
echo realpath($file)."<br>";

echo "<pre>";
print_r(pathinfo($file));

echo pathinfo($file, PATHINFO_FILENAME)."<br>";

$path = realpath($file);
echo dirname($path)."<br>";
echo dirname($path, 2)."<br>";








?>