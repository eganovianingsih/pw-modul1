<!DOCTYPE html>
<html>
<head>
	<title>modul 2 - latihan 1</title>
	<style type="text/css">
		.kotak{
			width: 50px;
			height: 50px;
			border: 1px solid black;
			margin-left: 2px;
			margin-top: 2px;
			font-size: 30px;
			float: left;
			text-align: center;
			line-height: 45px;


		}

		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php
	for($i=1; $i <= 5; $i++){
		for ($j=1; $j <= $i; $j++){
	echo '<div class="kotak">'.$j.'</div>';
}
echo'<div class="clear"></div>';
}
?>

</body>
</html>