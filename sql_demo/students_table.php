<?php

require_once "../utils.php";
require_once "connect_to_db.php";

generate_title("All students");


$students = selectData();
//print_r($students);
drawTable($students);


# display data in table