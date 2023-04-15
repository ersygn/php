<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="aturjarak">
<?php
echo "<h2>BIODATA ANDA</h2>";
echo "Nama :".$_POST['nama']."<br>";
echo "Email :".$_POST['email']."<br>";
echo "Alamat :".$_POST['alamat']."<br>";
echo "Tempat & Tanggal Lahir :".$_POST['ttl']."<br>";
echo "Pendidikan :".$_POST['pendidikan']."<br>";
echo "Status :".$_POST['status']."<br>";
$file = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
move_uploaded_file($tmp_name, "images".$file);
?>
<table border="1">
<tr>
<td>FOTO ANDA</td>
</tr>
<tr>
<td> <img src="images<?php echo $file ?>" style="width:300px"></td>
</tr>
</table>
</div>
</body>
</html>
