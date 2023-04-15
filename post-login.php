<?php
if (empty($_POST['nama'])) {
	header("Location:gagal.php");
}else{
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
}
?>