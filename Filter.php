<?php
/*
Validating data = Determine if the data is in proper form.

Sanitizing data = Remove any illegal character from the data.

The filter_var() function both validate and sanitize data.

filter_var() function to remove all HTML tags from a string:

*/
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}


?>
