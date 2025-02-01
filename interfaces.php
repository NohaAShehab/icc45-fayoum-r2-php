<?php


interface  transportation
{
    # any class implement interface must override the abstract method --> or class defined as abstract
    function setModel($model);
    function setYear($year);
}

class Car implements transportation{
    public function setYear($year)
    {
        // TODO: Implement setYear() method.
    }
    public function setModel($model)
    {
        // TODO: Implement setModel() method.
    }
}

$c = new Car();

class Plane implements transportation{
    public function setModel($model)
    {
        // TODO: Implement setModel() method.
    }
    public function setYear($year)
    {
        // TODO: Implement setYear() method.
    }
}


abstract class Train implements transportation{

}

