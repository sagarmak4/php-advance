<?php

/*The required format parameter of the date() function specifies how to format the date (or time).
  echo "Today is" . date ("y/m/d") . "<br>";
  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("Y-m-d") . "<br>";
  echo "Today is " . date("l");

 H - 24-hour format of an hour (00 to 23)
 h - 12-hour format of an hour with leading zeros (01 to 12)
 i - Minutes with leading zeros (00 to 59)
 s - Seconds with leading zeros (00 to 59)
 a - Lowercase Ante meridiem and Post meridiem (am or pm)

 
 echo "The Time is" . date("h.i.sa");


 date_default_timezone_get("pune");
 echo "This time is " .date("h.i.sa");


//mktime(hour, minute, second, month, day, year);

mktime(11,22,45,5,5,2023);
echo "created date" . date("y-m-d h:i:sa");
*/
// strtotime(time, now)
 
$a = strtotime("Tommorow");
echo date("y-m-d h:i:sa $a");


?>