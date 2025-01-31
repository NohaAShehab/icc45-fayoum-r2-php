<?php


require "../utils.php";
require "db/pdo_operations.php";

//var_dump($_GET['id']);
if(isset($_GET['id'])) {


    $std = select_student($_GET['id']);

//    print_r($std);



}
?>
<h1 style="text-align: center"> Student Info</h1>
<div class="card" style="width: 18rem;">
    <img src="<?php echo $std['image'];?> " class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $std['name']; ?></h5>
        <p class="card-text"> <?php echo $std['grade']; ?></p>
        <a href="students_table.php" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
