<?php

require_once 'utils.php';
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


$mys=  new ShapePrinter();
$mys->setShape(new class implements Shape{
    public function calArea()
    {
        echo "Area = 10 <br>";
        // TODO: Implement calArea() method.
    }
});

$mys->getShape()->calArea();



$mys2 = new ShapePrinter();
$mys2->setShape(new class implements Shape{
    public function calArea()
    {
        echo '<h5 style="color: darkred">No Area </h5>';
        // TODO: Implement calArea() method.
    }
});

$mys2->getShape()->calArea();







$mys3 = new ShapePrinter();
$mys3->setShape(new class implements Shape{
    public function calArea()
    {
        return 100;
        // TODO: Implement calArea() method.
    }
});

var_dump($mys3->getShape()->calArea());








/*
 *
 * products ==> caltotal_revenu==> product
 * --> product --price
 *
 *
 * **/

interface Product
{
    function setPrice(int $price);
}


class Revenu{
    private $item;

    /**
     * @param mixed $item
     */
    public function setItem(Product $item): void
    {
        $this->item = $item;
    }

    public function getItem(): Product
    {
        return $this->item;
    }

}



$books_renvenu = new Revenu();
$books_renvenu->setItem(new class  implements Product{
    public function setPrice(int $price)
    {
        $total = $price * 12  *.2;
        echo $total;
        // TODO: Implement setPrice() method.
    }

});

$books_renvenu->getItem()->setPrice(10);


$meat_revenu = new Revenu();
$meat_revenu->setItem(new class  implements Product{
    public function setPrice(int $price){
        $total = $price * 12  *.3;
        echo "<br>", $total;
    }
});

$meat_revenu->getItem()->setPrice(400);
























