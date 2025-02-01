<?php

require_once "utils.php";

generate_title("traits");
# interface group of prototypes
# traits groups of functions  -->have body

trait greeting{
    function sayhi($name){
        echo "Hi {$name}";
    }


    function displayusername(){
        echo "<h3> My name is {$this->name}</h3>";
    }
}


class Student{
    use greeting;
    private $name;
    function __construct($name){
        $this->name = $name;
    }




}

$s = new Student("John");
$s->displayusername();
$s->sayhi("abc");


generate_title("can I override trait function");

class Teacher{
    use greeting;
    private $name;
    private $age;
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    function displayusername()
    {
        echo "<h3> My name is {$this->name}: {$this->age}</h3>";
    }


}

$t= new Teacher("John",30);
$t->displayusername();



$s = new Student("lkjklj");
$s->displayusername();










