<?php

require_once "../utils.php";
require_once "connect_to_db.php";
var_dump($_GET);


if(isset($_GET["id"])){
    $id = $_GET["id"];
    $deleted = deleteData($id);
    var_dump($deleted);
    # delete image
    if(isset($_GET['image'])){
        try{
            # delete file '
            unlink($_GET['image']);
        }catch (Exception $e){
            displayError($e->getMessage());
        }
    }
}

header("Location: students_table.php");