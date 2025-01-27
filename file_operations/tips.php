<?php


//$arr = ["", 23, 233, false, 223];
//
//var_dump(array_filter($arr));


/// file exists
///
var_dump(file_exists("mycv.txt"));
var_dump(filetype("mycv.txt"));
var_dump(filetype("demo"));


$filepath = "/var/www/html/itp45/round2/fayoum/day02/file_operations/append.php";
var_dump(basename($filepath));
