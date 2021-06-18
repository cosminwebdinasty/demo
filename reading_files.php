<?php 

$file = "example.txt";

if($handle = fopen($file, 'r')){


echo $content = fread($handle, filesize($file)); //Each bite = 1 char


fclose($handle);
}
else {

    echo "File couldn't be written";
}

