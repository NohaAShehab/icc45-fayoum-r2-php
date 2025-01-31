<?php

require_once "utils.php";

generate_title("functions with variable number of arguments");

function ask_for_students(...$students) { # ... represent zero or more arguments

    var_dump($students);
}

ask_for_students("ahmed", "mohamed", 'test');
# *************************************************
generate_title("call by value");
function incrementFun($value, $amount = 1) {
    $value = $value +$amount;
    echo "<h3> value  ={$value}</h3>";
}
$value=10;
incrementFun($value);
var_dump($value);

# ****************** call by reference
generate_title("call by reference", 1, 'blue');

function incrementFun2(&$value, $amount = 1) {
    $value = $value +$amount;
    echo "<h3>value  ={$value}</h3>";
}
//$value=10;
//incrementFun2($value);
//var_dump($value); // 11




# ******************************
generate_title("Clousures", 1, "red");

$myclosure=function ($num, $num2){
    $res=  $num+$num2;
    var_dump($res);
};

//var_dump($myclosure);
//# I need to use closure
//$myclosure(3,4);
//var_dump(is_callable($myclosure));

# I need to define closure --> deals with external variable


$no_students  = 16;
# closure can use exteranal variable
$std_closure = function ()  use ($no_students){
    echo "Total number of students {$no_students}<br>";
};
$std_closure();


#### example on using closure ??
# array_map ,




/**
    Route::get("/students", function(){
    represent controller
 * });
 */

# check this

# function that accept function , return with function ??
# higher order function
function sayHi(){
    echo '<h1>Hi team nice to meet you </h1>';
    return function(){
        echo "<h3 style='color: blueviolet'>Calling part 02 of say hi<h3>";
    };
}
//
//$res=sayHi();
//var_dump($res);
//$res();

sayHi()();



draw_empty_lines();















































































