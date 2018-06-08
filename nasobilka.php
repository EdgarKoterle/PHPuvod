<!DOCTYPE html>
<html>
<head>
	<title>phpTest</title>
</head>
<body>
	<H1>Mala nasobilka</H1>
	<?php
		echo "<TABLE BORDER=\"1\" WIDTH=\"500\">";
		echo "<TR><TH></TH>";
		for ($i=0; $i < 10; $i++) { 
			echo "<TH>".$i."</TH>";
		}

		echo "</TR>";
		for ($i=0; $i < 10; $i++) { 
			echo "<TR><TH>".$i."</TH>";
			for ($j=0; $j < 10; $j++) { 
				echo "<TD>".$i.$j."</TD>";
			}
			echo "</TR>";
		}

		echo "</TABLE>";
		?>
</body>
</html>