<?php

require_once "utils.php";

# class can inherit from one class (abstract or not )
# in some case you need to inherit from different structure
# interfaces --> define architecture rather than functionality


interface Transportation
{
    public function setModel($model);
    public function setYear($year);

}

abstract class Car implements Transportation{

    # either define class as abstract class
    # override the interface functions

}


class BMW extends Car {
    public function setModel($model)
    {
        // TODO: Implement setModel() method.
    }
    public function setYear($year)
    {
        // TODO: Implement setYear() method.
    }
}

$c = new BMW();