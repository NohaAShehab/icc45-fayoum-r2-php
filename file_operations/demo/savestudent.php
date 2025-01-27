<?php


require "../../utils.php";

generate_title("Save new student");

var_dump($_POST);
# I need to prepare the student data to be added to the file students.txt
$id = $_POST['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];
$student_data = "{$id}:{$name}:{$grade}\n";

# save data to the file ??

$fileobject = fopen("students.txt", "a");
if($fileobject){
    fwrite($fileobject, $student_data);
    fclose($fileobject);
}

/// I need to redirect to the students_table page after adding the students
# redirect me to the given location
header("Location: students_table.php");