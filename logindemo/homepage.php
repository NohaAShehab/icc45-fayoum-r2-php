<?php

require '../utils.php';

## only logged in users can see this page
session_start();

if (! $_SESSION['login']){
    header('Location: login.php');
}

echo "<h1 style='color: darkblue'> Home Page</h1>";

echo "Welcome to your home page {$_SESSION['email']}";

echo "<a href='logout.php' class='btn btn-dark'>Logout</a>";