<?php

require_once "utils.php";

generate_title("inheritance ");

/*
class Person {

    private $name;
    private $age;

}
class Student extends Person {

}

$student = new Student();
print_r($student);

*/




/*
class Person {

    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

}
class Student extends Person
{
}

$s = new Student("ahmed", 10);
print_r($s);

*/
###########################################3
class Person {

    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function displayPerson() {
        echo "<p>Name: " . $this->name . "</p>";
        echo "<p>Age: " . $this->age . "</p>";

    }



}
class Student extends Person
{
    public $grade;
    function __construct($name, $age, $grade){
        # call parent constructor
        parent::__construct($name, $age);
        echo "<h1>std is created </h1>";
        $this->grade = $grade;
    }

    # overriding ??
    function displayPerson() {
        # calling parent of display
        parent::displayPerson();
        echo "<p style='color: red'>grade = {$this->grade} </p>";
    }
}


$s = new Student("abc", 23, 100);
print_r($s);

$s->displayPerson();



generate_title("overloading ");

class Teacher{

    function printVal($color="black"){
        echo "<p style='color: {$color}'> print Value </p>";
    }

    # interpreted lang. --> you cannot have overloading
//    function printVal($color){
//        echo "<p style='color: {$color}'>Any value </p>";
//    }

}

$t = new Teacher();
$t->printVal();
$t->printVal("Red");






generate_title("classes and final keyword");

class Machine{
    public $brand;
    function sayHello(){
        echo "hello I am a machine";
    }
}
class Transportation extends Machine{
    public $type;
    final function canMove()
    {
        echo "I can move";
    }
}


final class Car extends Transportation{
    # Cannot override final method Transportation->canMove()
//    function canMove()
//    {
//
//    }

}

/*
Class may not inherit from final class
class BMW extends car{

}
*/














