<?php

require  'connection_mysqli.php';

generate_title("---- Mysqli- OOP -----");

# I need to create table students ??




# insert data in table

generate_title('Insert');
function insert_data($name, $grade, $image=""){
    $db_object = mysqli_connect_oop();
    try{
        $inst_query = "INSERT INTO `students` ( `name`, `grade`, `image`)
            values (? , ?, ?)";

        var_dump($inst_query);

        # I need mysqli to prepare query ==>
        $prepared_stmt =$db_object->prepare($inst_query);
        # var_dump($prepared_stmt);
        $prepared_stmt->bind_param("sis", $name, $grade, $image);
        $prepared_stmt->execute(); # execute statement after binding params

        if($db_object->insert_id){
            displaySuccess("Inserted Successfully with id {$db_object->insert_id}");
            return true;
        }

        $db_object->close();

    } catch (Exception $e){
        displayError($e->getMessage());
    }

}


function select_data(){
    $db_object = mysqli_connect_oop();
    try{
        $select_query = "SELECT * FROM `students`";
        $stmt = $db_object->prepare($select_query);
        $stmt->execute(); # mysqli_prepared_stmt   --


        $result   = $stmt->get_result();  # return pointer to the result > object num_rows, no_of_fields
//        var_dump($result);
        $rows = [];
        while($row = $result->fetch_assoc()){  # fetch each row as associative array ?
            $rows[]= $row;
        }
//        print_r($rows);

        return $rows;
    }catch (Exception $e){
        displayError($e->getMessage());
        return false;
    }
}

//select_data();





























