<?php
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);

    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

    # I will add the commonly used parts
    echo "<div class='container'><pre>";

    # 1- define function generate title
    function generate_title($message, $size=1, $color='black'){
        echo '<hr>';
        echo "<h{$size}  style='color:{$color}' class='text-center'>{$message}</h{$size}>";
    }

//
//    generate_title("iti", 1, 'red');
//    generate_title("iti", 2, 'blue');
//    generate_title("iti", 3, 'green');