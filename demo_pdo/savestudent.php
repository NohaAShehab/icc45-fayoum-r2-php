<?php


require "../utils.php";
require "db/pdo_operations.php";


generate_title("Save new student");

var_dump($_POST);
# I need to prepare the student data to be added to the file students.txt
$name = $_POST['name'];
$grade = $_POST['grade'];
$image= $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
//var_dump($_FILES);
//exit;




if($name and $grade and $image and $image_size ){
    $image_name = "uploads/".time()."_".$image;
    $uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $image_name);
    if(! $uploaded){
        $image_name=null;
    }
    # we need to insert the student ??
    $inserted =insert_data($name, $grade, $image_name);




    /// I need to redirect to the students_table page after adding the students
    # redirect me to the given location
    header("Location: students_table.php");
}
# return to the form =--> you have error

else{
    /// prepare errors
    $errors = [];
    $old =[];
    foreach ($_POST as $key => $value) {
        if (! $value){
            $errors[$key] = "Please enter a {$key}";
        }else{
            $old[$key] = $value;
        }
    }
    if(! $image){
        $errors['image'] = "Please select a image";
    }

    print_r($errors);
    # php provide function convert array to json string (serialization)
    $errors = json_encode($errors); # string

    $url  = "Location: addstudent.php?errors={$errors}";
    // I need to send the errors to the form
    if(count($old)){
        $old = json_encode($old);
        $url  = "{$url}&old={$old}";
    }
    header($url);
}

