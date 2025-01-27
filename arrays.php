<?php
require 'utils.php';

generate_title("Arrays");
$arr=[3,5,"Application",True,"PHP"];
$arr1= array("Noha","Engineering","ITI");
$arr[]="new value";
print_r($arr);
//var_dump($arr);

print_r($arr1); # human readable display array

# access elements using index
//for($i=0;$i< count($arr); $i++ ){
//    echo $arr[$i]." ";
//}



### generate array of elements

$nums = range(1,5, 2);
//print_r($nums);

$char_arr = range("a","z",2);
//print_r($char_arr);



generate_title("Associative Arrays");

$info=["Name"=>"Noha","Email"=>"nshehab@iti.gov.eg","Track"=>"Application"];
print_r($info);

foreach($info as $key=>$value){
//    echo "{$key}=>{$value}<br>";
}
# keys are unique
//$info["name"]="noha";
//print_r($info);
//
//$info["Name"]= "Noha Shehab";
//print_r($info);


generate_title("compact", 1, 'green');

$name="ahmed";
$track = "php";
$branch='fayoum';

$std_info = compact("name","track","branch");

print_r($std_info);

###################################
generate_title("Array operators", 1, 'purple');

$num=[2,4,6,8,10];
//print_r($num);
$alphas=["a","b","c","d", "e", "f"];

$arr3= $num+$alphas;
print_r($arr3);

################################


generate_title("Multi-dim array");
$students=array(
    1=>array("Ali","IOT"),
    2=>array("Mostafa","Cloud"),
    3=>["Noha","Application"]
);
//print_r($students);
//
//print_r($students[1][1]);



generate_title("Sorting",1, "red");
$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman" );
sort($names); // returns with the are sorted ascending.
print_r($names);


$nums = ["3", "300", "100", "-1"];
sort($nums, SORT_NUMERIC);
print_r($nums);



generate_title("sorting associative arrays");
$prices = array( "meat"=>100, "Sugar"=>10, "tea"=>8 );

//sort($prices);  # sort the array be values , remove keys
//print_r($prices);

# associative sort ??
//asort($prices); # sort with value --> keep keys
//print_r($prices);

# sort assoc. array using keys ?

ksort($prices);
print_r($prices);

generate_title("Array functions");

$arr  = [4,4312,"sdf", "iti", true, 100,23];
shuffle($arr);
print_r($arr);



$res=array_reverse($arr);  # return a copy of array reversed
print_r($res);


array_push($res, 'element');
print_r($res);


$popped_element=array_pop($res);
echo $popped_element;
print_r($res);


generate_title("Array flip");
$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow');

print_r($colors);

$newflipped=array_flip($colors);
print_r($newflipped);



generate_title("Array navigation",1, 'yellow');
$fruits = ['banana', 'apple', 'kiwi', 'strawberry', 'watermelon', 'mango'];
$found = in_array('banana', $fruits);
var_dump($found);

echo current($fruits), "<br>";
echo next($fruits), '<br>';
echo end($fruits), '<br>';
echo prev($fruits), '<br>';
echo reset($fruits), '<br>';



generate_title("array walk");
$fruits = ['banana', 'apple', 'kiwi', 'strawberry', 'watermelon', 'mango'];
# apply function to array element

function printItem($item){
    echo "{$item}#<br>";
}
array_walk($fruits, 'printItem');


generate_title("array map ");


$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];

## contains [instructor teach course
# function name, course
function assign_course($name, $course){
    return "{$name} teaches {$course}";
}

$res=array_map("assign_course", $instructors, $courses); # new array
print_r($res);

//$res=array_map(
//    function ($name, $course){return "{$name} teaches {$course}";},
//    $instructors, $courses);
//print_r($res);



$n = array_map(function($item){return "{$item}#";}, $courses);
print_r($n);



#################
$students=Array("Ali","Ahmed","Mostafa","Omar","Ahmed");
var_dump(count($students)); // 5
var_dump(sizeof($students)); // 5
print_r(array_count_values($students));


###########
generate_title("array scalar");

$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg","track"=>"Application"];
extract($info);
echo $username." ".$email." ".$track;





































































































