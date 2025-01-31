<?php

require  'connection_mysqli.php';

generate_title("---- Mysqli- procedural -----");

# I need to create table students ??
function create_table(){
    try{
        $db_object = connect_to_database();
        # create table
        $create_query = "CREATE TABLE IF NOT EXISTS `students` (`id` int AUTO_INCREMENT primary key,
            `name` varchar(50) NOT NULL, `grade` int )";

        # var_dump($create_query);
        # ask db to create table;
        $res=mysqli_query($db_object, $create_query);
        # res true --> query syntax is correct.
        var_dump($res);

        # close connection
        mysqli_close($db_object);

    }catch (Exception $e){
        displayError($e->getMessage());

    }

}
//create_table();



# insert data in table

generate_title('Insert');
function insert_data(){
    $db_object = connect_to_database();
    try{
        $inst_query = "INSERT INTO `students` ( `name`, `grade`)
            values ('noha', 100)";

        $res=mysqli_query($db_object, $inst_query);
//        var_dump($res);
//        var_dump($db_object);
        # display ==> insertid =, student inserted successfullt

        if(mysqli_insert_id($db_object)){
            $inserted_id =mysqli_insert_id($db_object);
            displaySuccess("Student Inserted Successfully with id: {$inserted_id}");
        }

        mysqli_close($db_object);

    } catch (Exception $e){
        displayError($e->getMessage());
    }

}

//insert_data();

generate_title("Update", 1, "purple");

function update_data(){
    $db_object = connect_to_database();
    try{
        $update_query = "UPDATE `students` set `name`='updated' where `id`=7";
        $res=mysqli_query($db_object, $update_query); # true
        if(mysqli_affected_rows($db_object)){
            displaySuccess("Student Updated Successfully with id");

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
    $db_object = connect_to_database();
    try{
        $delete_query = "DELETE from `students` where `id`=6";
        $res=mysqli_query($db_object, $delete_query); # true
        if(mysqli_affected_rows($db_object)){
            displaySuccess("Student Deleted Successfully");

        }else{
            echo "<h4 style='color: darkblue'>No change</h4>";
        }

    }catch (Exception $e){
        displayError($e->getMessage());
    }

}
delete_data();


generate_title("Select", 1, "Blue");

function select_data(){
    $db_object = connect_to_database();
    try{
        $select_query = "SELECT * FROM `students`";
        $res = mysqli_query($db_object, $select_query);
        # var_dump($res);
        # you need to fetch rows

        # $rows= mysqli_fetch_all($res);
        #$rows = mysqli_fetch_assoc($res);
        $rows = [];
        while($row = mysqli_fetch_assoc($res)){
            $rows[] = $row;
        }
//        print_r($rows);

        drawTable($rows);
    }catch (Exception $e){
        displayError($e->getMessage());
    }
}

select_data();





























