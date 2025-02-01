<?php

require_once "utils.php";


class Student{


}

//

# you can allow user to add function in the runtime and call it


class Employee
{
    function __call($name, $arguments){
        echo "dynamic function called {$name}<br>";
        var_dump($arguments);
        if (in_array("ls", $arguments)){
            echo `ls -l`, "<br>";
        }

        if (count($arguments)) {
            return $arguments[0];
        }
        // if arguemnt --> ls -->

    }

}

$emp = new Employee();
var_dump($emp->sayhi(false, "Mohamed"));

var_dump($emp->bye(23, "ls"));













