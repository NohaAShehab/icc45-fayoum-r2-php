<?php


require "../utils.php";

//var_dump($_SESSION);

## you access values inside the session
# I need to use the session --> if user called me before
session_start();


//print_r($_SESSION);

echo "<h1> Hello {$_SESSION['name']}!</h1>";