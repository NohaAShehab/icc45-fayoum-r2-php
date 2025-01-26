<?php
    require 'utils.php';
    
    generate_title("1- define variable ?? -->");

    # 1- define a variable 

    $name = "ahmed"; 

    $Name = "ali";

    $num = 10;
    $happy = true; 


    // php is loosley dynamically typed lang. ?? 
    // interpreter detect datatype in the runtime 


    // print variable 

    echo $name; 

    echo " {$name} {$num}  {$happy}  {$Name} <br>";


    $x = "iti";

    var_dump($x); // print detailed information about the variable 

    $x = 100;
    var_dump($x);






?>