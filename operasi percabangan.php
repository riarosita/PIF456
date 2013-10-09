<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>.:Operasi Percabangan:.</title>
	</head>

	<body>
		<h3><center>BIAYA KIRIM PAKET</center></h3>
		<form action="hasil percabangan.php" method="post">
			<table align="center" width="285" border="1" bgcolor="#CCCCCC">
			
				<tr>
					<td>Kota Pengiriman :</td>
					<td>
						<select name="a">
							<option value="Malang">Malang</option>
							<option value="Surabaya">Surabaya</option>
							<option value="Bojonegoro">Bojonegoro</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Kota Tujuan :</td>
					<td>
						<select name="b">
							<option value="Semarang">Semarang</option>
							<option value="Jakarta">Jakarta</option>
							<option value="Jogjakarta">Jogjakarta</option>
						</select>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" value="HITUNG"></td>
				</tr>
				
			</table>
		</form>
		
		<br><br><br>
		<a href="index.html" align="right">Kembali ke halaman menu</a>
	</body>
</html>
