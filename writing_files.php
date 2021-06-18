<?php 

$file = "example.txt";

if($handle = fopen($file, 'w')){


fwrite($handle, "arg3raegaergaergeag");


fclose($handle);
}
else {

    echo "File couldn't be written";
}




?>