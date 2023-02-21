<?php

$f_contents = array_unique(explode("\n", str_replace("\r", "", file_get_contents("att.txt")))); 
$line = $f_contents[rand(0, count($f_contents) - 1)];
echo $line;
?>