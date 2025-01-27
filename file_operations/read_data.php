<?php

require '../utils.php';


generate_title("Hello from files ");


$filehandler=fopen("welcome.txt","r");
if ($filehandler) {
//    var_dump($filehandler);
//    var_dump(is_resource($filehandler));

    // read data
    // fread(resource object, size of file )
    $filesize = filesize("welcome.txt");  # retrun with size of file
    $data = fread($filehandler, $filesize ); # read data into one string
//    var_dump($data);

    // move cursor of file to the beginning of the file again
    fseek($filehandler, 0 );
    // read data line by line
    echo "reading data ....... <br>";
    while(!feof($filehandler)) {
        $line = fgets($filehandler);
//        var_dump($line);
//        echo "{$line} </br>";
    }

    /*** read data using function file ***/


    $lines = file("welcome.txt");
    var_dump($lines); # read file content into array
    # each element in array represents one line


    // close the file
    fclose($filehandler);
}

