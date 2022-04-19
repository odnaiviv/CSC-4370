<html>
<body>
	<table width="300px" border="1px" cellpadding="1px" cellspacing="1px">
		<!-- main php code -->
		<?php
		echo "Checkerboard<br><br>";
		$num = 0;
		//nested for loops go make table
		//columns
		for ($col = 0; $col < 8; $col++) {
			echo "<tr>";
			$num = $col;
			//rows
			for ($row = 0; $row < 8; $row++) {
				//odd even squares are red
				if ($num % 2 == 0) {
					echo "<td height=35px width=35px bgcolor=red></td>";
					$num++;
				}
				//odd squares are black
				else {
					echo "<td height=35px width=35px bgcolor=black></>";
					$num++;
				}
			}
			echo "</tr>";
		}
		?>
	</table>

</body>
</html>
