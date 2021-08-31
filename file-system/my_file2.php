<?php
$file = fopen("readme.txt", "r");

// echo fread($file, 50);
// echo fread($file, filesize("readme.txt"));

echo fgets($file)."<br>";


if(is_file("readme.txt")) {
    echo "Yes, It's a file.<br>";
}else {
    echo "No, It's not a file.<br>";
    
}


if(is_dir("new-folder")) {
    echo "Yes, It's a Folder.<br>";
}else {
    echo "No, It's not a Folder.<br>";

}


if(is_writable("readme.txt")) {
    echo "Yes, It's writable.<br>";
}else {
    echo "No, It's not writable.<br>";

}


if(is_readable("readme.txt")) {
    echo "Yes, It's readable.<br>";
}else {
    echo "No, It's not readable.<br>";

}


if(is_executable("readme.txt")) {
    echo "Yes, It's executable.<br>";
}else {
    echo "No, It's not executable.<br>";

}
















?>