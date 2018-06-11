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
		$v=$a+$b;
		$d=$a/$b;
		$n=$a*$b;
		$m=$a-$b;

		if ($_GET["agree"]==off)
		{
			die("You have to agree with calculate");
		}

		else
		{

		if(($_GET["operations"])=="basic")
		{
			echo "<DIV>Sucet: ".$a."+".$b."=".$v."</DIV>";
			echo "<DIV>Rozdiel: ".$a."-".$b."=".$m."</DIV>";		
		}

		else
		{
			echo "<DIV>Sucet: ".$a."+".$b."=".$v."</DIV>";
			echo "<DIV>Podiel: ".$a."/".$b."=".$d."</DIV>";
			echo "<DIV>Sucin: ".$a."*".$b."=".$n."</DIV>";
			echo "<DIV>Rozdiel: ".$a."-".$b."=".$m."</DIV>";	

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