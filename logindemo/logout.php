<?php

require_once('../utils.php');

session_start();
### session destroy

//$_SESSION = array();

session_destroy();

echo "<h1>Logged out successfully! </h1>";

echo "<a class='btn btn-primary' href='login.php'> Login Again </a>";