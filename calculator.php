<!DOCTYPE html>
<html>
<head></head>
<body>

	<?php	
	if (empty($_GET["valA"]) || empty($_GET["valB"]))
	{
		die("Empty value(s)");
	}

	else
	{
		$a=$_GET["valA"];
		$b=$_GET["valB"];
		$sucet=$a+$b;
		$podiel=$a/$b;
		$sucin=$a*$b;
		$rozdiel=$a-$b;

		if ($_GET["agree"]==off)
		{
			die("You have to agree with calculate");
		}

		else
		{

		if(($_GET["operations"])=="basic")
		{
			echo "<DIV>Sucet: ".$a."+".$b."=".$sucet."</DIV>";
			echo "<DIV>Rozdiel: ".$a."-".$b."=".$rozdiel."</DIV>";		
		}

		else
		{
			echo "<DIV>Sucet: ".$a."+".$b."=".$sucet."</DIV>";
			echo "<DIV>Podiel: ".$a."/".$b."=".$podiel."</DIV>";
			echo "<DIV>Sucin: ".$a."*".$b."=".$sucin."</DIV>";
			echo "<DIV>Rozdiel: ".$a."-".$b."=".$rozdiel."</DIV>";	

		$dotaz="INSERT INTO history (valA,valB) VALUES (".$a.",".$b.")";
		$conn=mysqli_connect("localhost:3306", "root", "", "phpcalc");
		if (!$conn)
		{
			die("Connection failed: ".mysqli_connector_error());
		}

		echo "Connected successfully";

		if ($conn->query($dotaz)===TRUE)
		{
			echo "New record created successfully";
		}

		else
			echo "Error: ".$sql."<BR>".$conn->error;
		}
	}
?>
</body>
</html>