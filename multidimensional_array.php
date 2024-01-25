<?php

$student_master=array(array("rollno"=>1,"name"=>"Ayushi"),array("rollno"=>2,"name"=>"Nupur"),
array("rollno"=>3,"name"=>"Kinjal"),array("rollno"=>4,"name"=>"Hetvi"),
array("rollno"=>5,"name"=>"siya"),array("rollno"=>6,"name"=>"jiya"),
array("rollno"=>7,"name"=>"riya"),array("rollno"=>8,"name"=>"Krisha"));

foreach($student_master as $i)
{
	foreach($i as $j)
	{
		echo $j." ";
	}
	echo "<br>";
}

?>