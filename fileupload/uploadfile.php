<?php

require "../utils.php";

generate_title("File upload");

print_r($_POST);

# when use method post, enctype=multipart/formdata with input type file
# file will be uploaded to the server  --> file upload to temp place
# you move the uploaded file from tmp place to any dir you want
print_r($_FILES);

$file_name = $_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
var_dump($file_type);
$file_ext= explode(".", $_FILES['image']['name']);
$file_ext=strtolower(end($file_ext));

# mimetype
### validation ??
if (in_array($file_ext, array("jpg", "jpeg", "gif", "png"))) {

/// get uploaded file -> save in new location

    $moved = move_uploaded_file($file_tmp, "uploads/" . $file_name);
    if ($moved) {
        echo "file successfully uploaded <br>";
        echo "<img src='uploads/{$file_name}' width=200' height='200'>";
    } else {
        generate_title("File upload error", 2, 'red');
    }

}else{
    generate_title("File upload error not valid extension {$file_ext}", 2, 'red');
}










