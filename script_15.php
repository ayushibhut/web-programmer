<html>
<form>
Enter one Number: <input type="text" name="val_1" />
Enter second Number: <input type="text" name="val_2" />
Enter third Number: <input type="text" name="val_3" />

<input type="submit" name ="submit"/>

</form>
</html>
<?php
$a=$_REQUEST ['val_1'];
$b=$_REQUEST ['val_2'];
$c=$_REQUEST ['val_3'];


if ($a > $b)
{
	if ($a > $c)
	{
		echo "a is large";
	}
	else
	{
		echo "c is large";
	}
}
else
{
	if($b > $c)
	{
		echo "b is large";
	}
	else
	{
		echo "c is large";
	}
}
?>





