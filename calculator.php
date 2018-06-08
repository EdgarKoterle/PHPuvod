<!DOCTYPE html>
<html>
<head></head>
<body>

	<?php	
	if(empty($_GET["valueA"]) || empty($_GET["valueB"]) ){

		echo "<div>Cannot calc null input </div>";
	}

	else
	{
		$a =$_GET["valueA"];
		$b =$_GET["valueB"];
		$e = $_GET["box"];
		$r = $_GET["age"];
		$v = $a+$b;
		$d = $a/$b;
		$n = $a*$b;
		$m = $a-$b;

		if(($_GET["age"]) == "basic")
		{
			echo "<H3>Sucet: ".$a." + ".$b." = ".$v."</H3>";
			echo "<H3>Podiel: ".$a."/".$b."=".$d."</H3>";		
		}

		else
		{
			echo "<H3>Sucet: ".$a." + ".$b." = ".$v."</H3>";
			echo "<H3>Podiel: ".$a."/".$b."=".$d."</H3>";
			echo "<H3>Sucin: ".$a."*".$b."=".$n."</H3>";
			echo "<H3>Rozdiel: ".$a."-".$b."=".$m."</H3>";
			echo "Chcek box status ".$_GET["box"]."!";		
}
		
?>
</body>
</html>