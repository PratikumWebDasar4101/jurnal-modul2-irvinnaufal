<?php 
$jumlah = $_GET['jumlah'];
for ($i=0 ; $i <$jumlah ; $i++) { 
	for ($j=$i; $j<$jumlah; $j++) { 
		echo "*";
	}
	echo "<br>";
}

?>
