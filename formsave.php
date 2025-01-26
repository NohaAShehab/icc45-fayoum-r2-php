<?php


require 'utils.php';

generate_title("Welcome to the server ya form");

$name = 'noha';
var_dump($name);
/****
 * 
 * I need to get the data sent via the form ???
 * 
 */

 // if data ===> via request method --> get or post 
 // you find the data in varaible  $_REQUEST

 generate_title("use $_request to get request data ");

 var_dump($_REQUEST); // get data of the request --> method get or post 

//  var_dump($_SERVER['REQUEST_METHOD']);


 generate_title('get the GET request data', 1 , "red");

//  var_dump($_GET); /// get the data if request method is GET


 generate_title('get the POST request data', 1 , "blue");

//  var_dump($_POST); /// get data if request method is POST 



 generate_title("Display form info");


 # php ---> has associative array --> use keyword to acess array element 


 echo "My email is {$_POST['email']}<br>";
 echo "My password is {$_REQUEST['password']}";


?>