<?php
/*


* @author     Sagar Makwana
* @datetime   28 Apr 2023
* @perpose    A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
* @input      Give input from users 
* @output     return value.

function exclaim($str){
    return  $str . "#" ;
}

function ask($str){
    return $str . "%" ;
}

function printformated($str , $format){
    echo  $format($str);
}

printformated("hello" , "exclaim");
printformated("hi" , "ask");

echo "<br>";
*/

function callback($item) {
    return strlen($item);
}


$String = ["aaple","banana","orange"];
$length = array_map("callback",$String);
print_r($length);



?>

