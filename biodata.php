<!DOCTYPE html>
<html>
<head>
	<title> Biodata sederhana </title>
</head>
<body>
	<h2><center>ISI BIODATA</center></h2>
	<form method="POST" action="post-bio.php" enctype="multipart/form-data">
		<table width="400" align="center" cellpadding="10" cellspacing="2">
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td width="130">Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td width="130">Tanggal Lahir</td>
			<td><input type="date" name="ttl"></td>
		</tr>
		<tr>
			<td width="130">Pendidikan</td>
			<td>
				<input type=radio name=pendidikan value="sd"><font>Sd</font>
				<input type=radio name=pendidikan value="smp"><font>Smp</font>
				<input type=radio name=pendidikan value="sma"><font>Sma</font>
				<input type=radio name=pendidikan value="kuliah"><font>Kuliah</font>
			</td>
		</tr>
		<tr>
			<td width="130">Status</td>
			<td>
			<input type=radio name=status value="Menikah"><font>Menikah</font>
			<input type=radio name=status value="Belum Menikah"><font>Belum Menikah</font>
			</td>
		</tr>
		<tr>
			<td width="130">Foto Diri</td>
			<td>
				<input type="file" name="file">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="btnlogin" value="Kirim" style="width: 80px; height: 30px; color: white; background-color: darkblue;">
				<input type="reset" name="reset" value="Reset" style="width: 80px; height: 30px; color: white; background-color: darkblue;">
			</td>
		</tr>
	</form>
</body>
</html>