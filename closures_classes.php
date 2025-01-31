<?php


require_once "utils.php";

generate_title("Closures and classes");


$printname= function (){
    echo "<h4 style='color: brown'>{$this->name}</h4>";
};

class Student{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}

$s = new Student("ahmed");


##
class Employee{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}
$emp = new Employee("Ali");


print_r($s);
print_r($emp);


# bind closure to the object ??

$res=$printname->bindTo($s);
# apply fun. of closure on the given object
//print_r($res);
$res();

$printname->bindTo($emp)();

##### @########################################
generate_title("can closure access private properties");

class Shape{
    private $type;
    function __construct($type){
        $this->type = $type;
    }
}

$type_closure= function ($color="blue"){
  echo "<h3 style='color: {$color}'> {$this->type}</h3>";
};
$sh = new Shape("Circle");
print_r($sh);

//$type_closure->bindTo($sh)("green");
$type_closure->bindTo($sh, Shape::class)("green");# scope binding

/*
$r=$type_closure->bindTo($sh);
//print_r($r);
$r("green");
*/
# from php7  using call function with closure -->
#  no need for scope binding ?? -->
# call it automatically ???
$s2 = new Shape("square");
$type_closure->call($s2, 'orange');






####  define general function arch. --> inside the closure
#, ==> you can follow
# then --> use it many times
#



#########################################
generate_title('Closures inside a class ',1 , "red");


class Image{
    private $src;

    function __construct($src){
        $this->src = $src;
    }
    function display(){
        echo "Image = {$this->src}";
        # user may need to display image
        return function (){
          echo "<img src='{$this->src}' width='100' height='100'>";
        };
    }

}


$img = new Image("cookie.png");
$dis=$img->display();
$dis();

$img3 = new Image("pic.png");
$img3->display()();







draw_empty_lines();;


























