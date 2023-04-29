<?php
/*
* @author     Sagar Makwana
* @datetime   28 Apr 2023
* @perpose    JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
* @input      Give input from users 
* @output     return value.


PHP has some built-in functions to handle JSON.

First, we will look at the following two functions:

json_encode()
json_decode()
*/


$cars = array("bmw","volvo","toyto");
echo json_encode($cars);

//The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

  
$cars = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($cars));
?>