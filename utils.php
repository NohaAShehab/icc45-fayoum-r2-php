<?php
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);

    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

    # I will add the commonly used parts
    echo "<div class='container'> <pre>";

    # 1- define function generate title
    function generate_title($message, $size=1, $color='black'){
        echo '<hr>';
        echo "<h{$size}  style='color:{$color}' class='text-center'>{$message}</h{$size}>";
    }

    function displayError($errormessage){
        echo "<br>------ error message ------";
        echo "<h4 style='color: red'>{$errormessage}</h4>";
    }

    function drawlines()
    {
        echo "<hr>";
    }

    function displaySuccess($message)
    {
        echo "<h4 style='color: green'>{$message}</h4>";

    }


function drawTable($students){
    echo "<table class='table'>";
    echo "<tr> <th> ID</th> <th> Name</th> <th> Grade</th>   <th>Image</th>
        <th>Show</th> <th>Delete</th> </tr>";
    foreach($students as $student) {   #EACH student is array of values
        echo "<tr>";
        foreach ($student as $key=>$value) {

            if ($key != "image") {
                echo "<td>{$value}</td>";
            }else{
                echo "<td><img src='{$value}' width='100' height='100'></td>";
            }
        }
        echo "<td><a class='btn btn-info' href='show.php?id={$student['id']}'>Show</a></td>";
        echo "<td><a class='btn btn-danger' href='delete.php?id={$student['id']}&image={$student['image']}'>Delete</a></td>";
        echo "</tr>";

    }

    echo "</table>";


}


//
//    generate_title("iti", 1, 'red');
//    generate_title("iti", 2, 'blue');
//    generate_title("iti", 3, 'green');