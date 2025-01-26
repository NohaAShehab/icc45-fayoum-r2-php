<?php


require 'utils.php';

generate_title("Print vs echo ");

$name=  "Ahmed";
$std = "Sara";
$std2= "Mohamed";

echo $name," ",  $std," " , $std2, "<br>";

print($name);
print($std);


generate_title("xor");
//$happy = false;
//$work = true;
//
//var_dump( $work xor ($happy));
//

$happy='anyvalue';
$work = 0;
var_dump($work xor  $happy);

/*
 *  values  --> 2 types
 *
 * value represent true
 * any value not in the falsy values
 *
 * value represent false?
 *  0 , false , null , [], "", ''
 * */
$name = "noha";

//var_dump((bool)$name);

generate_title("instance of ", 1, 'red');


class Student{}

$n = new Student();
//var_dump($n);

var_dump( $n instanceof  Student);


generate_title("execution operator");


//echo `pwd; ls -l `;


generate_title("variable functions");
$num="10";
settype($num,"int"); # casting
echo gettype($num), "<br>";

$nums = [3,44,34];
var_dump( is_array($nums));






generate_title("isset vs empty");

$usernamee;
var_dump( isset($usernamee));  # false
var_dump(empty($usernamee));  # true
echo " --------------- <br>";
$abc = 0;
var_dump( isset($abc));
var_dump(empty($abc));

echo " --------------- <br>";
$mmm = "iti";
var_dump( isset($mmm));
var_dump(empty($mmm));

echo " --------------- <br>";

var_dump(isset($yyy));
var_dump(empty($yyy));



generate_title("foreach");

$nums = [3,434,32,23];

for($i=0; $i<count($nums); $i++){

    echo "<li> $nums[$i] </li>";
}

echo "--- using foreach .... <br>";

foreach ($nums as $abbass){
    echo "<li> abbass = {$abbass} </li>";
}

echo "== using foreach .. to print index...";
exit;
foreach ($nums as $index => $n){
    echo "<li> {$index} => {$n} </li>";
}

var_dump($nums);





























































