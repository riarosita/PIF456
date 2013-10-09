<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>.:Operasi Logika:.</title>
	</head>

	<body>
		<h3><center>OPERASI LOGIKA A DAN B</center></h3>
		<form action="hasil logika.php" method="post">
			<table align="center" width="285" border="1" bgcolor="#CCCCCC">
			
				<tr>
					<td colspan=2>Angka yang harus diinputkan adalah 0 atau 1</td>
				</tr>
				<tr>
					<td>Masukkan nilai A :</td>
					<td>
					<select name="a">
						<option value="0">0</option>
						<option value="1">1</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Masukkan nilai B :</td>
					<td>
					<select name="b">
						<option value="0">0</option>
						<option value="1">1</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Operasi yang digunakan :</td>
					<td><select name="c">
					<option value="1">AND</option>
					<option value="2">OR</option>
					<option value="3">XOR</option>
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
