<!DOCTYPE html>
<html lang= "en">
<head>
	<meta charset="UTF-">
	<title>Modul 2 - latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>KOLOM 1</th>
			<th>KOLOM 2</th>
			<th>KOLOM 3</th>
			<th>KOLOM 4</th>
			<th>KOLOM 5</th>
		</tr>

		<?php
		for ($i = 1; $i <= 15; $i++){
			echo "<tr>";
		for ($j = 1; $j <= 5; $j++){
			echo "<th> Baris $i , Kolom ke-$j </th>";
		}
			echo "</tr>";
		}
		
		?>
	</table>

</body>
</html>