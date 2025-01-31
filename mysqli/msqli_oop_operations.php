<?php

require  'connection_mysqli.php';

generate_title("---- Mysqli- OOP -----");

# I need to create table students ??




# insert data in table

generate_title('Insert');
function insert_data(){
    $db_object = mysqli_connect_oop();
    try{
        $inst_query = "INSERT INTO `students` ( `name`, `grade`)
            values ('Ali', 100)";

        # to execute query ??
        $res = $db_object->query($inst_query);
        var_dump($res);

        if($db_object->insert_id){
            displaySuccess("Inserted Successfully with id {$db_object->insert_id}");
        }

        $db_object->close();

    } catch (Exception $e){
        displayError($e->getMessage());
    }

}
//insert_data();

generate_title("Update", 1, "purple");

function update_data(){
    $db_object = mysqli_connect_oop();
    try{
        $update_query = "UPDATE `students` set `name`='updated' where `id`=14";
        $res= $db_object->query($update_query);
        if($db_object->affected_rows){
            displaySuccess("Student Updated Successfully");

        }else{
            echo "<h4 style='color: darkblue'>No change</h4>";
        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }


}
//update_data();


generate_title("Delete", 1, "red");

function delete_data(){
    $db_object = mysqli_connect_oop();
    try{
        $delete_query = "DELETE from `students` where `id`=12";
        $res= $db_object->query($delete_query); # true
        if($db_object->affected_rows){
            displaySuccess("Student Deleted Successfully");

        }else{
            echo "<h4 style='color: darkblue'>No change</h4>";
        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }

}
//delete_data();


generate_title("Select", 1, "Blue");

function select_data(){
    $db_object = mysqli_connect_oop();
    try{
        $select_query = "SELECT * FROM `students`";
        $res = $db_object->query($select_query);
        # var_dump($res);

        # fetch result

        $rows = $res->fetch_all(MYSQLI_ASSOC);
        # print_r($rows);
        drawTable($rows);
    }catch (Exception $e){
        displayError($e->getMessage());
    }
}

select_data();





























