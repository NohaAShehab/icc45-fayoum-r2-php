<?php

require_once "../utils.php";
require_once "connect_to_db.php";

var_dump($_POST);
$name = $_POST['name'];
$grade = $_POST['grade'];
$image= $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];



if($name and $grade and $image and $image_size ){
    $image_name = "uploads/".time()."_".$image;
//    $image_name = "uploads/".$image;
    $uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $image_name);
    if(! $uploaded){
        $image_name=null;
    }
    # save data in db
    $inserted = insertdata($name,$grade,$image_name);
    var_dump($inserted);

    header("Location:students_table.php");
    # redirect page --> display all students
}


else{
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
    $errors = json_encode($errors); # string

    $url  = "Location: addstudent.php?errors={$errors}";
    // I need to send the errors to the form
    if(count($old)){
        $old = json_encode($old);
        $url  = "{$url}&old={$old}";
    }
    header($url);
}
