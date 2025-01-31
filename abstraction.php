<?php


require_once "utils.php";
generate_title("Abstraction");

# define architecture says each can move
# define abstract class --> must have at least on abstract method
abstract class MyCar{

    abstract function canMove();

}

//$c = new Car();


class VW extends MyCar {
    # you are extending from class Car- ? abstract
    # you must either define VW as abstract class
    # or override function canMove();
    function canMove(){
        echo "the car is moving";
    }
}

$mycar = new VW();
$mycar->canMove();