<?php

require "utils.php";
generate_title("get type of variable ");

$num = 10;

$msg=  "Hello";

var_dump($num);
var_dump($msg);

echo gettype($num), "<br>";
echo gettype($msg);

generate_title("casting between types", 1, "red");


$var1 = 0;
echo gettype($var1), "<br>";
$var2 = (float)$var1;
echo gettype($var2), "<br>";

$name = "10noha10";
$name = (integer)$name;
echo "name is {$name}<br>";


generate_title("variable of variable ");

$iti = "information Technology Institute";
echo "{$iti}<br>";


$internship = "iti";

echo "{$internship}<br>";

echo "{$$internship}<br>";


$username="Abdelrahman";

echo $$username, "<br>";
##
/////*** check this *******////

//$num= 10 ;
//$message=  "10iti";
//$res = $num + $message;
///*
//  *
//  * Fatal error:  Uncaught TypeError:
//  * Unsupported operand types: int + string
//  * in /var/www/html/itp45/round2/fayoum/day01/variableTypes.php:50
//Stack trace:
//  *
//  * */
//
//echo $res;

generate_title("string Concat");
$fname= "noha";
$lname= "shehab";

$fullname= $fname. " ". $lname;
echo $fullname, "<br>";

generate_title("Reference operator", 1, 'green');

$num = 10;
# deep copy # create new variable , new address in memory
$grade = $num;

var_dump($grade);
var_dump($num);

###################
$grade=  15;

var_dump($grade);
var_dump($num);


generate_title("shallow copy", 3,'orange');

###
$numm= 100;
# $numm and $grade are referring to the same address
# in the memory
$grade = &$numm;
var_dump($grade);
var_dump($numm);

echo "modify grade ... <br>";
$grade = 600;
var_dump($grade);
var_dump($numm);












































