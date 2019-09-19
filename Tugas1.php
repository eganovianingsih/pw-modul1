<?php
	echo "Pengulangan untuk mencari katagori bilangan :";
	echo "<br><br>";


	for ( $i = 1; $i <= 19; $i++ ) {
		$b = 0;
		for ( $j = 1; $j <= $i; $j++ ) {
			if($i % $j == 0 ) {
				$b++;
			}
		} if($b == 2 && $i % 2 == 1) {
			echo "<li>Angka " . $i . "Adalah bilangan ganjil sekaligus bilangan prima</li>";

		} else if($b == 2 && $i % 2 == 0) {
			echo "<li>Angka " . $i . "Adalah bilangan genap sekaligus bilangan prima</li>";

	    } else if($i % 2 == 0) {
			echo "<li>Angka " . $i . "Adalah bilangan genap </li>";

		} else{
			echo "<li>Angka " . $i . "Adalah bilangan ganjil </li>";
}
}

?>
