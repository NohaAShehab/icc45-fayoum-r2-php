<?php


require  "../utils.php";
require "../credits.php";


function connect_to_database(){
    try{
        $connection  = mysqli_connect(DB_HOST, DB_USER,
            DB_PASSWORD, DB_NAME,
            DB_PORT);
//        var_dump($connection);  # connection details
        return $connection;

    }catch (Exception $e){
        displayError($e->getMessage());
    }
}


//connect_to_database();

function mysqli_connect_oop(){
    try{
        $connection  = new mysqli(DB_HOST, DB_USER,DB_PASSWORD,
            DB_NAME, DB_PORT);
        # var_dump($connection);  # connection details
        return $connection;

    }catch (Exception $e){
        displayError($e->getMessage());
    }

}


//mysqli_connect_oop();

















//class Employee{
//
//
//}
//
//$e = new Employee();
//
//
//function anyfuncion(Employee  $obj){
//    var_dump($obj);
//}
//
//anyfuncion(new Employee());















