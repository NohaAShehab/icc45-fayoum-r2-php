<?php

require '../utils.php';
# session per browser
session_start();  # generate session id then create with same name of the session
# send the session id to client and save it in cookie .
generate_title("Sessions");



# http is stateless protocol

echo "<h1 style='text-align: center; font-style: italic'> welcome to session page </h1>";

# session per browser

## to use session to save data  $_SESSION
$_SESSION["name"]="noha";
$_SESSION["track"]="php";
$_SESSION["happy"]=true;
$_SESSION['grade']= 100;