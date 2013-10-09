<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Operasi Percabangan</title>
	</head>

	<body>
		<form action="operasi percabangan.php" method="post">

			<?php
			$a=$_POST[a];
			$b=$_POST[b];
			$c=$_POST[c];

			echo "<br>";
			echo "<br>";
			echo "Kota Pengiriman adalah"."&nbsp;".$a."<br>"."<br>";
			echo "Kota Tujuan adalah"."&nbsp;".$b."<br>"."<br>";

				if ($a == "Malang")
				{
					if ($b == "Semarang")
					{
						$h = 25000;
					}
					elseif ($b == "Jakarta")
					{
						$h = 40000;
					}
					else
					{
						$h = 50000;
					}
				}
				elseif ($a == "Surabaya")
				{
					if ($b == "Semarang")
					{
						$h = 20000;
					}
					elseif ($b == "Jakarta")
					{
						$h = 35000;
					}
					else
					{
						$h = 35000;
					}
				}
				else
				{
					if ($b == "Semarang")
					{
						$h = 50000;
					}
					elseif ($b == "Jakarta")
					{
						$h = 70000;
					}
					else
					{
						$h = 60000;
					}
				}
				
				
				
			echo "Biaya pengiriman paket adalah $h";
			echo "<br>"."<br>";
			echo "<input type='submit' value='Ulang'>";
			?>
			
		</form>
		<br><br><br>
		<a href="index.html" align="right">Kembali ke halaman menu</a>
	</body>
</html>
