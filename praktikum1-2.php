<!DOCTYPE html>
<html>
<head>
	<title> Pemograman OHO dengan Array </title>
</head>
<body>
<?php
//penulisan array dapat dibuat seperti berikut
$nama[] = "Ersy";
$nama[] = "Genius";
$nama[] = "Nagari";
echo $nama[1] . $nama[2] . $nama[0];
echo "<br>";
//menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
?>
</body>
</html>