<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Operasi Percabangan</title>
	</head>

	<body>
		<form action="operasi perulangan.php" method="post">
		
			<?php
			$genap=$_POST[genap];
					
				if (isset($genap))
				{
						$bilgen=intval($genap);
						echo "<br><br>";
						echo "Bilangan Genap dari 2 s/d $bilgen adalah: ";	
						echo "<br>";
						$gen=0;
						while ($gen<$genap)
						{
						   $gen=$gen+2;
						   echo "$gen";
						   echo " ";
						}
				}
				
				echo "<br>"."<br>";
				echo "<input type='submit' value='Ulang'>";
			?>
				
		</form>
		
		<br><br><br>
		<a href="index.html" align="right">Kembali ke halaman menu</a>
	</body>
</html>
