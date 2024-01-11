<?php

//date & time function

echo date("Y-m-d H:i:s");
echo "<br>";
echo time();
echo "<br>";
echo strtotime("2023-08-01");
echo "<br>";
echo gmdate("Y-m-d H:i:s");
echo "<br>";
echo mktime(12,0,8,1,2023);
echo "<br>";
date_default_timezone_set("America/New_York");
?>