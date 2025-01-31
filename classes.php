<?php


require_once 'utils.php';

generate_title("--- classes -----");

generate_title("1- define a class", 1, 'red');

# 1- define a class
class Student{
}

#2- take an object from the class
$s = new Student();
var_dump($s);
var_dump($s instanceof Student);
### you can modify object architecture in the runtime
$s->name=  "Ahmed Mohamed";
var_dump($s);


#### we need class to define common objects can have ??

generate_title("--- class with object properties -----", 1, 'green');

# access modifiers for the properties
/*
 * public  --> can be accessed anywhere in the
 * class or outside the class using object
 * reference
 * protected --> can be accessed anywhere in the class
 * and derived (inherits ) using object ref.
 * private  --> can be accessed only inside the class.
 * **/
class Student2{
    public  $name="";
    public $id;
    protected  $email="";
    private $grade=0;

}

//$s = new Student2();
//var_dump($s);
//$s->name = "Noha";
//var_dump($s);
////$s->email = "noha@gmail.com";
//
//$s2 = new Student2();
//var_dump($s2);



# ***************************
generate_title("=== we need to access private, protected members", 4, 'purple');


generate_title("--- setters and getters -----", 4, 'red');


class Student3{
    public  $name="";
    protected  $email="";
    private $grade=0;


    ### public , protected members  --> needs setters and getters

    function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email=$email;
        }
        else{
            throw new Exception("Invalid email");
        }
        #this operator --> refers to the current caller instance
    }
    function getEmail(){
        return $this->email;
    }
    function setGrade($grade){
        if (filter_var($grade, FILTER_VALIDATE_INT)) {
            $this->grade=$grade;
        }else{
            throw new Exception("Invalid grade");
        }
    }
    function getGrade(){
        return $this->grade;
    }

}


$std = new Student3();
$std->name = "noha";
//$std->setEmail("noha@gmail.com");
//print_r($std);
//echo "<h4>{$std->getEmail()}</h4>";
//var_dump($std->getEmail());




# **********************************
generate_title("Constructor", 1, 'brown');

# I need to customize object while creation

class Student4{
    public  $name="";
    protected  $email="";
    private $grade=0;

    # define function construct --> calling while creating the object

    function __construct($name, $email, $grade)
    {
        $this->name = $name;
        $this->setEmail($email);
        $this->setGrade($grade);
        echo "<h3 style='color: green'>Object is being created </h3>";
    }



    function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email=$email;
        }
        else{
            throw new Exception("Invalid email");
        }
        #this operator --> refers to the current caller instance
    }
    function getEmail(){
        return $this->email;
    }
    function setGrade($grade){
        if (filter_var($grade, FILTER_VALIDATE_INT)) {
            $this->grade=$grade;
        }else{
            throw new Exception("Invalid grade");
        }
    }
    function getGrade(){
        return $this->grade;
    }

}

//$std2  = new Student4("noha", "noha1@gmail.com", 100);
//print_r($std2);


# ********************************************
generate_title("Destructor");

class Student5{
    public  $name="";
    protected  $email="";
    private $grade=0;


    function __construct($name, $email, $grade)
    {
        $this->name = $name;
        $this->setEmail($email);
        $this->setGrade($grade);
        echo "<h3 style='color: green'>Object is being created </h3>";
    }



    function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email=$email;
        }
        else{
            throw new Exception("Invalid email");
        }
        #this operator --> refers to the current caller instance
    }
    function getEmail(){
        return $this->email;
    }
    function setGrade($grade){
        if (filter_var($grade, FILTER_VALIDATE_INT)) {
            $this->grade=$grade;
        }else{
            throw new Exception("Invalid grade");
        }
    }
    function getGrade(){
        return $this->grade;
    }


    function __destruct(){
        echo "<h3 style='color: red'>Object is being deleted {$this->name} </h3>";
    }
}

$s3 = new Student5("Ahmed", "ahmed@gmail.com",100);

$s4 = new Student5("Mohamed", "mohamed@gmail.com", 98);
unset($s4);
$s5 = new Student5("ali", "ali@gmail.com", 98);



# *****************************
generate_title("static members",1, 'blue');
class Student6{

    static $count = 0;
    public  $name="";
    protected  $email="";
    private $grade=0;


    function __construct($name, $email, $grade)
    {
        self::$count++;  # self refers to the current class
        $this->name = $name; # this refers to the current object / instance
        $this->setEmail($email);
        $this->setGrade($grade);
        echo "<h3 style='color: green'>Object is being created </h3>";
    }



    function setEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email=$email;
        }
        else{
            throw new Exception("Invalid email");
        }
        #this operator --> refers to the current caller instance
    }
    function getEmail(){
        return $this->email;
    }
    function setGrade($grade){
        if (filter_var($grade, FILTER_VALIDATE_INT)) {
            $this->grade=$grade;
        }else{
            throw new Exception("Invalid grade");
        }
    }
    function getGrade(){
        return $this->grade;
    }


    function __destruct(){
        # apply certain operation when delete the object
        self::$count--;
        echo "<h3 style='color: red'>Object is being deleted {$this->name} </h3>";
    }
}


echo Student6::$count;


$std = new Student6('abc', "abc@f.com", 122);

$std2 = new Student6('abc', "abc@f.com", 122);
$std3 = new Student6('abc', "abc@f.com", 122);
$st4 = new Student6('abc', "abc@f.com", 122);
echo Student6::$count;

unset($std);

echo Student6::$count;







# **************************************
generate_title('Constant inside a class');

class Employee{

    const nationality = "Egyptian";  # constant is treated as static member

}
echo Employee::nationality, "<br>";
$e = new Employee();
print_r($e);

# *************************************



generate_title("static methods");

class Employee2{

    # this function depends on the class not object
    # function describe class behaviour not object behaviour.
    static function describe_class()
    {
        echo nl2br("this example illustrate 
static function in php
to call this function you need only the classname");
    }
}

Employee2::describe_class();






class Std{

    static private $objects = [];
    # function return all objects in the table stds in db ?

    function __construct(){
        Std::$objects []= $this;
    }
    static function getAll(){
        echo "<br>this is all students";
        print_r(Std::$objects);
    }

}
//$ss = new Std();
//$ss->name= "Ahmed";
//Std::getAll();





generate_title("Dynamic setters and getters ");

# all objects from the same class must have
# the same properties
class User{
 # I need to control what will happen when I add new
    # property to the object in the run time ?

}

$user = new User();
$user->city = "cairo";
var_dump($user);


$user2 = new User();
$user2->track = "PHP";
var_dump($user2);


################ I need to restrict this ?
class User2{
    function __set($name, $value)
    {
        echo "<br>new property is added ";
        $this->$name = $value;
//        throw new Exception("you can not set this property");
    }

}

$user = new User2();
$user->__set("name", "Ahmed");
//$user->city = "cairo";
var_dump($user);


$user2 = new User2();
$user2->track = "PHP";
var_dump($user2);








































































draw_empty_lines();