<?php

    require_once 'connection.php';

    generate_title("insert");
    function insert(){
        $pdo = connectToDB();
        try{
            $name=  "anyname";
            $grade = 80;
            #### method01
            /*
            $inst_query = "INSERT INTO `students`(`name`, `grade`) values (? , ?) ";
            $stmt = $pdo->prepare($inst_query);
            $res =$stmt->execute([$name, $grade]);
            # if student inserted
            var_dump($pdo->lastInsertId());
            */

            $inst_query =  "INSERT INTO `students`(`name`, `grade`) 
            values (:stdname, :stdgrade ) ";
            # var_dump($inst_stmt);
            # I need to prepare the statement
            $stmt = $pdo->prepare($inst_query);
            ### then you need to bind param ??
            $stmt->bindParam(':stdname', $name);  # bind param --> waits for variable
//            $stmt->bindParam(':stdgrade', 60);
            $stmt->bindValue(':stdgrade', 24);
            $stmt->execute();
            if($pdo->lastInsertId()){
                displaySuccess("Student inserted successfully {$pdo->lastInsertId()}");
            }
    }catch (PDOException $e){
            displayError($e->getMessage());
        }
    }
insert();


####################################3
    generate_title("select data");
    function select_data(){
    try{
        $pdo = connectToDB();
        $query = "SELECT * FROM `students`";

        # use pdo to select data ??
        $statement = $pdo->prepare($query);
        $res =$statement->execute();
        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        drawTable($result_set);
//        var_dump($result_set);
    }catch (PDOException $e){
            displayError($e->getMessage());
        }
    }

    select_data();