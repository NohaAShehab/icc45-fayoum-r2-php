<?php
require_once "credits.php";

require_once "../utils.php";


function connectToDB() {
    $dbname= DB_NAME;
    $db_host= DB_HOST;
    # use pdo
    try{
        $pdo = new PDO("mysql:dbname={$dbname};host={$db_host}",DB_USER,DB_PASS);
//        var_dump($pdo);
        return $pdo; # used be later in any funciton

    }catch (PDOException $e){
        displayError($e->getMessage());
    }
}

//connectToDB();



function insertdata($name, $grade, $image){
    ## I need pdo object to insert
    try{
        $pdo = connectToDB();
        # prepared stmt.
        $insert_query = "Insert into students (`name`, `grade`, `image`) values (:name, :grade, :image)";
        $stmt = $pdo->prepare($insert_query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':grade', $grade);
        $stmt->bindParam(':image', $image);
        $stmt->execute();
        # record added or not
        if($pdo->lastInsertId()){
            displaySuccess("Insert Successful {$pdo->lastInsertId()}");
            return $pdo->lastInsertId();
        }

        return false;
    }catch (PDOException $e){
        displayError($e->getMessage());
        return false;
    }

}


function deleteData($id){
    try{

        $pdo = connectToDB();
        # define temp for query
        $delete_query = "Delete from students where id = :stdid";
        $stmt = $pdo->prepare($delete_query); # stmt
        $stmt->bindParam(':stdid', $id);
        $stmt->execute();
        if($stmt->rowCount()){
            displaySuccess("Delete Successful {$id}");
            return $stmt->rowCount();
        }
        return  true;
    }catch (PDOException $e){
        displayError($e->getMessage());
        return false;
    }
}



function selectData(){
    try {
        $pdo = connectToDB();
        $select_query = "Select * from students";
        $stmt = $pdo->prepare($select_query);
        $res =$stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;

    }catch (PDOException $e){
        displayError($e->getMessage());
        return false;
    }
}







