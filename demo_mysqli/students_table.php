<?php
 # function read data from file --> then display it in a table

require "../utils.php";
require "db/msqli_oop_operations.php";
generate_title("All students", 1, "red");
$students=  select_data();
drawTable($students);
?>
<a href="addstudent.php" class="btn btn-primary"> Add new Student </a>

