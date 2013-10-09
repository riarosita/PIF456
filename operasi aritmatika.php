<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>.:Operasi Aritmatika:.</title>
	</head>

	<body>
		<h3><center>OPERASI ARITMATIKA A DAN B</center></h3>
		<form action="hasil aritmatika.php" method="post">
			<table align="center" width="285" border="1" bgcolor="#CCCCCC">
			
				<tr>
					<td>Masukkan nilai A :</td>
					<td><input type="text" name="a"></td>
				</tr>
				
				<tr>
					<td>Masukkan nilai B :</td>
					<td><input type="text" name="b"></td>
				</tr>
				
				<tr>
					<td>Operasi yang digunakan :</td>
					<td><select name="c">
					<option value="1">Penjumlahan [a+b]</option>
					<option value="2">Pengurangan [a-b]</option>
					<option value="3">Perkalian [a*b]</option>
					<option value="4">Pembagian [a/b]</option>
					<option value="5">Modulus [a%b]</option>
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
