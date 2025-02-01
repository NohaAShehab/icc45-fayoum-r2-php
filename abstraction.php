<?php


abstract class Person{
    abstract  function speak( string $message):string;

}

class Teacher extends Person{
    function speak(string $message): string{
     echo "hiii ";
     return $message;
    }
}

$t = new Teacher();
var_dump($t->spaek("abccccccccccccccc"));