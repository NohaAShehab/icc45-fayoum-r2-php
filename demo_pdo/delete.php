<?php

require "../utils.php";
require "db/pdo_operations.php";

var_dump($_GET);

if(isset($_GET["id"])){
    $id = $_GET["id"];
    delete_data($id);
    if(isset($_GET['image'])){
        try{
            unlink($_GET['image']);
        }catch (Exception $e){
            displayError($e->getMessage());
        }
    }
    header("Location: students_table.php");
}else{
    displayError("----- You did not enter an ID -----");
}



### connect to db --> then delete object ??
