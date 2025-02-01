<?php


require "utils.php";
generate_title("abc");

//require_once "utils.php";
//generate_title("mmm");

class Person{
    function __set($name,$value){
        $this->$name=$value;
    }
    function __get($name){
        return $this->$name;
    }
}
$p = new Person();
$p->__set("name","John Doe");
print_r($p);

$p2 = new Person();
print_r($p2);