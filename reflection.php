<?php


    require_once "utils.php";

    generate_title("Reflection");
    ### class PDO --> php tell me about class PDO

    ### need reflect class

//    $pdo_reflection =  new ReflectionClass("PDO");

//    var_dump($pdo_reflection);
//
//    var_dump($pdo_reflection->getAttributes());
//    var_dump($pdo_reflection->getMethods());






class Course{

    private $name;
    private $description;
    private  $max_grade;

    function __construct($name, $description, $max_grade){
        $this->name = $name;
        $this->description = $description;
        $this->max_grade = $max_grade;
    }

    function setMaxGrade($max_grade){
        $this->max_grade = $max_grade;

    }
    function getMaxGrade(){
        return $this->max_grade;
    }

    function getName(){
        return $this->name;
    }
    function getDescription(){
        return $this->description;
    }
    function setDescription($description){
        $this->description = $description;
    }
}



# I need you to describle class

$course_reflect= new ReflectionClass("Course");
print_r($course_reflect->getProperties());
print_r($course_reflect->getMethods());













