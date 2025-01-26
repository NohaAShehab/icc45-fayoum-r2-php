<?php
require 'utils.php';

generate_title("Scopes");

generate_title("Global Scopes", 1, "red");
$name = "ahmed";  // global scope ??
// variable can be accessed any where in the script
var_dump($name);

echo "helloo";
var_dump($name);

generate_title("local Scopes", 1, "blue");
// any variable defined inside the function is local variable
// local variable can be accessed only inside the function

function sumnum(){
    $res = 100;
    echo "res = {$res} <br>";
}

sumnum();

echo $res;

echo "hi";

generate_title("Parameter  Scopes", 1, "green");

function sumnum2($num1 , $num2){
    /*
     * parameter scope variable like local variable can be accessed
     * inside the function only
     * */
    $res = $num1 + $num2;
    echo "res = {$res} <br>";

}
sumnum2(3,4234);

echo $num1 ;


generate_title("Can I use the global variable from inside the function");

$course=  "PHP";

//function printCourseName()
//{
//        echo "course = {$course}";
//}

function printCourseName()
{
    # I need to use the global variable course
    global $course;
    echo "course = {$course}";
}

//printCourseName();


generate_title("static scope", "1", "orange");

//function countCalls(){
//    $count= 0; # this variable will hold value
//    # must be destroyed if function ended
//    $count ++;
//    echo "count = {$count} <br>";
//
//}
function countCalls(){
    static $count= 0; # this variable will hold value
    # must be destroyed if function ended
    $count ++;
    echo "count = {$count} <br>";

}

//countCalls();
//countCalls();
//countCalls();
//echo $count;


$times = 0;
function sayhi(){
    global $times;
    $times++;
    print("times = {$times} <br>");
}
//sayhi();
//sayhi();
//sayhi();
//$times = 10;
//sayhi();







/******************************/
generate_title("Constant", 1, "purple");
/// constants can be accessed anywhere in the script
///
const piii= 3.14;
define ("track", "php");

var_dump(track);
var_dump(piii);

function testConstant(){
    echo "form inside the function <br>";
    var_dump(track);
    var_dump(piii);
    echo "<br>";
}
//testConstant();



generate_title("super global scope", 1, "red");

/*
 *  super global variable can be accessed anywhere in the script
 * $_POST
 * $_GET
 * $_REQUEST
 *
 * ****/

var_dump($_GET);

function test()
{
    echo "calling the function ... <br>";
    var_dump($_REQUEST);
}
test();








































































