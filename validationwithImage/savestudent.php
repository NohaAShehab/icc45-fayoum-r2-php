<?php


require "../utils.php";

generate_title("Save new student");

var_dump($_POST);
# I need to prepare the student data to be added to the file students.txt
$id = $_POST['id'];
$name = $_POST['name'];
$grade = $_POST['grade'];
$image= $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
//var_dump($_FILES);
//exit;




if($id and $name and $grade and $image and $image_size ){
    # if image exists
    move_uploaded_file($_FILES['image']['tmp_name'], "uploads/{$image}");

    $student_data = "{$id}:{$name}:{$grade}:uploads/{$image}\n";


    # save data to the file ??
    $fileobject = fopen("students.txt", "a");
    if($fileobject){
        fwrite($fileobject, $student_data);
        fclose($fileobject);
    }

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

