<?php

$username = $_REQUEST ['user_txt'];
$password = $_REQUEST ['psw_txt'];
$name = $_REQUEST ['name_txt'];
$address = $_REQUEST ['add_txt'];
$country = $_REQUEST ['county_ddl'];
$zipcode = $_REQUEST ['zip_txt'];
$email = $_REQUEST ['mail_txt'];
$gender = $_REQUEST ['gender_rdb'];
$language = $_REQUEST ['lan_chk'];
$about = $_REQUEST ['about_txt'];

echo "<table border=2 align=center bordercolor=grey><tr><td>Username:</td><td>$username</td></tr>
			<tr><td>Password:</td><td>$password </td></tr>
			<tr><td>Name:</td><td>$name</td></tr>
			<tr><td>Address:</td><td>$address</td></tr>
			<tr><td>Country:</td><td>$country </td></tr>
			<tr><td>Zipcode:</td><td>$zipcode</td></tr>
			<tr><td>E-mail:</td><td>$email</td></tr>
			<tr><td>Gender:</td><td>$gender</td></tr>
			<tr><td>Language:</td><td>$language</td></tr>
			<tr><td>About:</td><td>$about</td></tr>
</table>";
?>