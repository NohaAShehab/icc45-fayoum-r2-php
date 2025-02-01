<?php
require_once "utils.php";

generate_title("Anonymous classes");

interface DisplayMessage
{
    function printMessage($msg);
}

class Printer {
    private $data;

    function setData(DisplayMessage $data) {
        $this->data = $data;
    }
    function getData() : DisplayMessage {
        return $this->data;
    }
}

# can I take from DisplayMessage??? No as it inteface
# but you can create class ---> implement interface
# then I can take object from it.

class Message implements DisplayMessage{
    public function printMessage($msg)
    {
        // TODO: Implement printMessage() method.
        echo "<h3 style='color:darkred'>{$msg}</h3>";
        echo "I am of type DispalyMessage <br>";

    }
}

//$msg = new Message();
////var_dump($msg instanceof DisplayMessage);
//
//
//
//$p  =new Printer();
//$p->setData($msg);
//print_r($p);
////var_dump($p->getData());
//$p->getData()->printMessage("iti");








###############################

interface  Shape
{
    function calArea();
}


class ShapePrinter{
    private $shape;
    function setShape(Shape $shape){
        $this->shape = $shape;
    }
    function getShape() : Shape{
        return $this->shape;
    }
}
class Square implements Shape{
    public function calArea()
    {
        // TODO: Implement calArea() method.
        echo "Area";
    }
}

$mys = new ShapePrinter();
$mys->setShape(new Square());

$mys2= new ShapePrinter();
class Circle implements Shape{
    public function calArea()
    {
        // TODO: Implement calArea() method.
        echo "circle area";
    }
}

$mys2->setShape(new Circle());





















