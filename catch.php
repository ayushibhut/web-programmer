<?php

$first_name=$_REQUEST ['fname_txt'];
$last_name=$_REQUEST ['lname_txt'];
$address=$_REQUEST ['address_txt'];
$city=$_REQUEST['city_txt'];
$state=$_REQUEST['state_txt'];
$mobile=$_REQUEST['mobile_txt'];
$class=$_REQUEST['class_txt'];
$div=$_REQUEST['div_txt'];

echo "<table border=1 bordercolor=blue><tr><td>First Name: </td><td>$first_name</td></tr>
<tr><td>Last Name:</td><td>$last_name</td></tr>
<tr><td>Address: </td><td>$address</td></tr>
<tr><td>City: </td><td>$city</td></tr>
<tr><td>State:</td><td>$state</td></tr>
<tr><td>Mobile Number:</td><td>$mobile</td></tr>
<tr><td>Class: </td><td>$class</td></tr>
<tr><td>Division:</td><td>$div</td></tr>
</table>";
?>
