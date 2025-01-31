<?php

require 'connection_pdo.php';


# I need to create table students ??




# insert data in table

function insert_data($name, $grade, $image=""){
    $pdo = connect_to_db_pdo();
    try{
        $inst_query = "insert into students (name, grade, image) values (:stdname, :stdgrade, :stdimage)";
        $stmt = $pdo->prepare($inst_query);
        $stmt->bindParam(':stdname', $name);
        $stmt->bindParam(':stdgrade', $grade);
        $stmt->bindParam(':stdimage', $image);
        $stmt->execute();
        if($pdo->lastInsertId()){
            displaySuccess("Insert Successful {$pdo->lastInsertId()}");
        }
        # to close the connection
        $pdo= null; ###
    }catch (PDOException $e){
        displayError($e->getMessage());
        return false;
    }
}


function select_data(){
    $pdo = connect_to_db_pdo();
    try{
       $select_query = "select * from students";
       $stmt = $pdo->prepare($select_query);
       $stmt->execute();
       # return  array of arrays [each one associative key=>value"
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo= null;
       return $result;


    }catch (Exception $e){
        displayError($e->getMessage());
        return false;
    }
}

//select_data();


function delete_data($id){
    try{
        $pdo = connect_to_db_pdo();
        $delete_query = "delete from students where id = :id";
        $stmt = $pdo->prepare($delete_query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount()){
            displaySuccess("Delete Successful");
        }else{
            displayError("Delete Failed");
        }

        # to close connection
        $pdo= null;
    }catch (PDOException $e){
        displayError($e->getMessage());
    }

}



function select_student($id){
    try{
        $pdo = connect_to_db_pdo();
        $select_query = "select * from students where id = :id";
        $stmt = $pdo->prepare($select_query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $pdo= null;
        return $result;
    }catch (PDOException $e){
        displayError($e->getMessage());
    }

}






















