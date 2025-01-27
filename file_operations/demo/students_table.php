

<?php
 # function read data from file --> then display it in a table

require "../../utils.php";

function readData($filename){
    $students = file($filename);  # return with array --> each element in array
    # remove empty elements
    $returned_students = [];  # contains valid lines

    foreach($students as $student){
        $student = trim($student); # remove \n 1:ahmed:100
        if ($student != ""){
            $student = explode(":", $student); # convert line to array based on the :
            $returned_students[] = $student;
        }
    }
    return $returned_students;
}




/// table

function drawTable($students){
    echo "<table class='table'>";
    echo "<tr> <th> ID</th> <th> Name</th> <th> Grade</th> 
        <th>Show</th></tr>";
    foreach($students as $student) {   #EACH student is array of values

            echo "<tr>";
                foreach ($student as $value) {
                    echo "<td>{$value}</td>";
                }
            echo "<td><a class='btn btn-info'>Show</a></td>";
            echo "</tr>";

    }

    echo "</table>";


}

generate_title("All students", 1, "red");
$students=  readData('students.txt');
drawTable($students);

?>
<a href="addstudent.php" class="btn btn-primary"> Add new Student </a>

