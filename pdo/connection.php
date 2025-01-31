<?php


require_once '../credits.php';
require_once "../utils.php";


function connectToDB()
{
    try{
        $db_name= DB_NAME;
        $db_host= DB_HOST;
        $pdo = new PDO("mysql:host={$db_host};dbname={$db_name}", DB_USER, DB_PASSWORD);

//        var_dump($pdo);
        return $pdo;}
    catch(PDOException $e){
        displayError($e->getMessage());
    }
}

connectToDB();