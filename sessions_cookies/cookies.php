<?php


    require "../utils.php";

    generate_title("cookies");

    var_dump($_COOKIE);

    # server set cookie --> save data --> data not critical


//    setcookie("coursename","php", time() + 3600 , "/" );

    ## remove cookie

setcookie("coursename", '', time() - 3600, "/");


var_dump($_COOKIE);

/*
 *  session --> saved on server
 *  -----> valid until you destroy the session /...
 *  --> store sensitive data
 *
 *
 * cookie --> saved on browser
 * ---> you set it or remove by adjusting life time
 * --> hold normal data
 *
 *
 *
 *
 * *****************************/