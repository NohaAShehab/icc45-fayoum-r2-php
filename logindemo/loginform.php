<?php

require '../utils.php';

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "noha@gmail.com" and $password == "123"){
    generate_title("Login success ", 1, 'green');

    // if user logged in successfully --> start new session

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['login'] = true ;

    header('Location: homepage.php');


}else{
    generate_title("Invalid login", 1, 'red');

    header('Location: login.php?invalid=invalidemailorpassword');
}