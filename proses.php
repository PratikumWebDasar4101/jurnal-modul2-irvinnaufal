<?php 
$jumlah = $_GET['jumlah'];
for ($i=0 ; $i <$jumlah ; $i++) { 
	for ($j=$i; $j<$jumlah; $j++) { 
		echo "*";
	}
	echo "<br>";
}
$n = 0;
echo "Genap : ";
for ($i=0; $i <$jumlah ; $i++) { 
	$n= ($n+2);
	echo $n;
}
$a = 0;
echo "<br>";
echo"Ganjil : ";
for ($i=0; $i <$jumlah ; $i++) { 
	$a = ($a+2);
	echo $a-1;
}
?>
