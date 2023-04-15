<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2 style="margin-top: 50px"><center>FORM LOGIN</center></h2>
<form method="POST" action="post-login.php" >
	<table width="260" align="center" cellpadding="10" cellspacing="2">
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
		<td colspan="2" id="wtj">
			<?php
			$day   = date('l');
 			$hari = array(
 					'Monday'  => 'Senin',
					'Tuesday'  => 'Selasa',
					'Wednesday' => 'Rabu',
					'Thursday' => 'Kamis',
					'Friday' => 'Jumat',
					'Saturday' => 'Sabtu',
					'Sunday' => 'Minggu');
 			$tw = date(", d-F-Y, H:i:s a", time()+50*60*6);
 			echo "".$hari[$day];
			echo "".$tw;
			?>
		</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="btnlogin" value="Kirim" style="width: 80px; height: 30px; color: white; background-color: darkblue;">
				<input type="reset" name="reset" value="Reset" style="width: 80px; height: 30px; color: white; background-color: darkblue;">
			</td>
		</tr>
	</table>
</form>
</body>
</html>