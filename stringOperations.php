<?php


require "utils.php";

generate_title('string operations');

generate_title("1- trim");
//$text = "\t\tThese are a few words :) ...  ";
//var_dump($text);
//$trimmed = trim($text); # return new trimmed string without extra white spaces
//var_dump($trimmed);

//$text = "\t\tThese are a few words :) ...  ";
//var_dump($text);
//$trimmed = trim($text, "\tTeh");
//var_dump($trimmed);

$text = "\t\tThese are a few words :) ...    ";
var_dump($text);
$trimmed = ltrim($text);
var_dump($trimmed);
$trimmed = rtrim($text);
var_dump($trimmed);

generate_title("Sophisticated format");

$message= "My name is Noha 
I works at ITI
I lives in cairo, I love Kiwi";
echo $message;
echo "<br> ......... <br>";
## if you want to keep new lines
echo nl2br($message);


generate_title("printf");

$txt="welcome";
echo $txt;
echo "<br> ......... <br>";
echo "[{$txt}]<br>";
printf("[%'#10s]\n",$txt);

echo "<br> ......... <br>";

$n =  8;
printf("%%b = '%b'\n", $n); // binary representation


$s = 'monkey';
printf("[%'$10s]\n",$s); // right-justification with spaces




generate_title("sprintf");
$num = 5;
$location = 'tree';
$format = 'There are %d monkeys in the %s %s';
//echo sprintf($format, $num, $location, "mmm");

echo sprintf($format, $location, $num, "mmm");


generate_title("formatting -----",1,'green');
$string= "welcome to iti";
echo strtoupper($string)."</br>";
echo strtolower($string)."</br>";
echo ucfirst($string)."</br>";
echo ucwords($string)."</br>";



generate_title("/// add slashes");

$str = "What's your name? what's your age?";
echo "{$str}</br>";
# add slash --> escape char ' part of string
$newString=addslashes($str);
echo $newString, "<br>";

echo stripslashes($newString) . "<br>";



generate_title("--- join split --- ");

$data = ["ahmed", "10", "iti", 10, true ];
# join array into one string
$anystring = join(", ", $data);
var_dump($anystring);

$_POST=[
    "name"=>"noha",
    "track"=>"php",
    "city"=>"cairo"];

//$user = join(":", $_POST);
//echo $user;

$user = implode(":", $_POST);
echo $user;


//// explode
$msg = "my name is noha";
var_dump(explode(" ", $msg));
//////////////////////////////////////////////////

generate_title("string tokenizer", 1,"blue");
$string = "My name is Noha, I works at ITI";
$tok = strtok($string, " ");
echo "{$tok}</br>";

while($tok !== false){
    $tok = strtok(" ");
    echo "{$tok}</br>";
}

# strtok--> save the rest of the string
# internally in the function
//# name is Noha, I works at ITI"
# next time you called the strtok? ---> read variable from the memory

$newmessage = "abc data abc";
$tok2 = strtok($newmessage, " ");

while($tok2 !== false){
    $tok2 = strtok(" ");
    echo "{$tok2}</br>";
}



##############################################
generate_title("substring",1, 'red');
$phptxt="PHP is simple";
echo substr($phptxt,1);
echo "<br>";
echo substr($phptxt,1, 8);

echo "<br>";
//echo substr($phptxt,-1);

echo substr($phptxt, 8, 3 );



#######################################



generate_title("string Compare", 1, 'brown');

//$var1 = "Hello";
//$var2 = "hello";
//var_dump(strcmp($var1, $var2));
//
//if (strcmp($var1, $var2) !== 0) {
//    echo '$var1 is not equal to $var2 in
//a case sensitive string comparison';
//}else{
//    echo "Equallll";
//}


//$var1 = "Aello";
//$var2 = "hello";
//var_dump(strcmp($var1, $var2));
//
//if (strcmp($var1, $var2) !== 0) {
//    echo '$var1 is not equal to $var2 in
//a case sensitive string comparison';
//}else{
//    echo "Equallll";
//}


##################
$var1 = "Hello";
$var2 = "hello";
var_dump(strcasecmp($var1, $var2));

if (strcasecmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in
a case sensitive string comparison';
}else{
    echo "Equallll";
}

##################
generate_title("string len ");
$str="Welcome to php";
var_dump(strlen($str));

###############
generate_title("strchr===strstr",1, "blue");

$email = 'name@example.com';
$domain = strstr($email,'@');
echo $domain."<br>";




###########################

generate_title("Tips ");
$string = 'noha';
$testt= md5($string); # calculate md5 of string
echo($testt)."<br>";

$string2 = 'noha';
$testt2= md5($string2."10"); # calculate md5 of string
echo($testt2)."<br>";


#### password
## usera : iti
# userb : iti
echo(ord("ABC"))."<br>";










##################
echo "check this -------- <br>";
echo str_repeat("iti ", 5)."<br>";
$str = 'abcdef';
echo str_shuffle($str)."<br>";
#######################################################


generate_title("string replace",1, 'orange');
$vowels = array("a", "e", "i", "o", "u", "A",
    "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels,
    "_", "Hello World of PHP");
echo $onlyconsonants."<br>";

#########################################

$input = array('A: XXX', 'B: XXXX', 'C: XXX');
$input=substr_replace($input, '####', 3, 4);
print_r($input);
echo implode('; ', $input);

####################################################



generate_title("regular expression");
$email='nshehab@iti.gov.eg';
$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";

var_dump(preg_match($pattern, $email));
if(preg_match($pattern,$email)){
    echo "<br>".'well formed';
}else{
    echo "<br>".'not well formed';
}

### pregmatch all

$str = "The rain in SPAIN falls mainly on the plains.";
#pattern inside // , i for ignoring case
$pattern = "/ain/i";
if(preg_match_all($pattern, $str, $matches)) {
    print_r($matches);
}

#######################################

generate_title("Filtervar");

# validate Email
# validate url
# validate ip address

$email="nohashehab.iti@gmail.com#ddd";

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $emailErr = "Invalid email format";
//}else{
//    echo "<br>".'Checked by php functions and well formed';
//}



















































































































echo str_repeat("<br>", 20)."<br>";




































































