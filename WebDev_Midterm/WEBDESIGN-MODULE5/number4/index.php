<!DOCTYPE html>
<html>
<body>

	<table style="width:100%">
		<table border="1">

		</tr>
<?php
 	
 	echo "<td>Odd</td> ";
	echo "<td>Even</td> ";

		for($i=1;$i<=10;$i++) {

			if($i%2==1)

			{

				echo "<tr>";

			}

			if($i%2==0) {

				echo "<td>".$i."</td>";

				}
			
			else {

				echo "<td>".$i."</td>";
		
				}

		}
		?>
	</table>
</body>
</html>