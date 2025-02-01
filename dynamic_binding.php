<?php


    require_once "utils.php";

    interface Animal
    {
        function makeNoise();
    }

    class Person{
        private $preferred_pet;
        function setPet(Animal $preferred_pet){
            $this->preferred_pet = $preferred_pet;
        }
        function getPet(): Animal{
            return $this->preferred_pet;
        }
    }


    class Cat implements Animal{
        function makeNoise(){
            echo "<h3 style='color: red;'> Meaw </h3>";
        }
    }

    class Dog implements Animal{
        function makeNoise(){
            echo "<h3 style='color: green;'> Bark </h3>";
        }
    }

    $pp = new Person();
    $pp->setPet(new Cat());
//    var_dump($pp->getPet());
//    var_dump($pp->getPet() instanceof Animal);
$pp->getPet()->makeNoise();


$p2= new Person();
$p2->setPet(new Dog());
$p2->getPet()->makeNoise();



$p3= new Person();
$p3->setPet(new class  implements Animal
{
    public function makeNoise()
    {
        echo "<h3 style='color: blue;'> SAWSAW </h3>";
        // TODO: Implement makeNoise() method.
    }
});

$p3->getPet()->makeNoise();









