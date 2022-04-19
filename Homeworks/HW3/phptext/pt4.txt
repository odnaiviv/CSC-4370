<html>
<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	padding: 5px;
}
table {
	width: 400px;
}
</style>
<body>
	<!-- main table -->
	<h4>Atlanta's Top 10 Restaurants</h4>
	<table>
		<!-- row 1 -->
		<tr>
			<th>Restaurant</th>
			<th>Average Cost</th>
		</tr>
		<!-- rows 2 -> 11 -->
			<?php
			//array for restaurant with average cost
			$placewcost = array("Fogo de Chão" => "40.50", "Aviva by Kameel" => "15.00", "Bone's Restaurant" => "65.00", "Umi Sushi Buckhead" => "40.50", "Fandangles" => "30.00", "Capital Grille" => "60.50", "Canoe" => "35.50", "One Flew South" => "21.00", "Fox Bros. BBQ" => "15.00", "South City Kitchen Midtown" => "29.00");
			foreach ($placewcost as $place => $cost) {
				echo "<tr>";
				echo "<td>" . $place . "</td>";
				echo "<td>$" . $cost . "</td>";
				echo "</tr>";
			}
			?>
	</table>

	<!-- sorting table by price in ascending order -->
	<h4>Table by Average Cost</h4>
	<table>
		<!-- row 1 -->
		<tr>
			<th>Restaurant</th>
			<th>Average Cost</th>
		</tr>
		<!-- rows 2 -> 11 -->
			<?php
			//function to sort restaurants by costs
			function sortbycost($placewcost) {
				arsort($placewcost);
				foreach ($placewcost as $place => $cost) {
					echo "<tr>";
					echo "<td>" . $place . "</td>";
					echo "<td>$" . $cost . "</td>";
					echo "</tr>";
				}
			}
			//calling function
			echo sortbycost($placewcost);
			?>
	</table>

	<!-- sorting table alphabetically -->
	<h4>Table by Name</h4>
	<table>
		<!-- row 1 -->
		<tr>
			<th>Restaurant</th>
			<th>Average Cost</th>
		</tr>
		<!-- rows 2 -> 11 -->
			<?php
			//function to sort restaurants by name, alphabetically
			function sortbyname($placewcost) {
				ksort($placewcost);
				foreach ($placewcost as $place => $cost) {
					echo "<tr>";
					echo "<td>" . $place . "</td>";
					echo "<td>$" . $cost . "</td>";
					echo "</tr>";
				}
			}
			//calling function
			echo sortbyname($placewcost);
			?>
	</table>
</body>
</html>
