<?php

require '../utils.php';


generate_title("Append data to file ");

// when open file for writing --> mode w ---> if not exists try to create it
$filehandler=fopen("mycv.txt","a");
if ($filehandler) {
    var_dump($filehandler);
    /// save data to the file ??

    $no_of_chars=fwrite($filehandler,"My name is Noha\n");
    var_dump($no_of_chars);
    fwrite($filehandler,"I works at ITI\n");
    fwrite($filehandler,"I lives in cairo\n");
    fwrite($filehandler,"-------------------------\n");

    fclose($filehandler);
}



generate_title("Displaying file content now.....");

//$content=file_get_contents("mycv.txt");  # return with string -> echo
////var_dump($content);
//echo $content;


readfile("mycv.txt");





