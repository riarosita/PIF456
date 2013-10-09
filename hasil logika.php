<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Operasi Logika</title>
	</head>

	<body>
		<form action="operasi logika.php" method="post">

			<?php
			$a=$_POST[a];
			$b=$_POST[b];
			$c=$_POST[c];

			echo "<br>";
			echo "<br>";
			echo "Nilai A adalah"."&nbsp;".$a."<br>"."<br>";
			echo "Nilai B adalah"."&nbsp;".$b."<br>"."<br>";

				switch($c){
				
					case 1 : $h = $a && $b;
					$x="AND";
					break;
					
					case 2 : $h = $a || $b;
					$x="OR";
					break;
					
					case 3 : $h = $a xor $b;
					$x="XOR";
					break;

				}
				
			echo "Hasil $x adalah $h";
			echo "<br>"."<br>";
			echo "<input type='submit' value='Ulang'>";

			echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "Note	:	"."<br>";
			echo "- Jika tidak ada hasilnya berarti bernilai 0 atau False"."<br>";
			echo "- Jika hasilnya satu berarti True";
			
			?>
		</form>
		
		<br><br><br>
		<a href="index.html" align="right">Kembali ke halaman menu</a>
	</body>
</html>
