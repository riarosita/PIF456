<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akses dan Manipulasi Data</title>
</head>

<body>
<?
	require_once './koneksi.php';
	
	$sql = 'SELECT * FROM mahasiswa';
	$res = mysql_query($sql);
	if ($res) {
		if (mysql_num_rows($res)) { ?>
		<table border = 1 cellspacing=1 cellpadding=5>
		<tr>
			<th>#</th>
			<th width=100>NIM</th>
			<th width=150>Nama</th>
			<<th>Alamat</th>
		</th>
		<?
			$i = 1;
			while ($row =mysql_fetch_row($res)) { ?>
            <tr>
            	<td><? echo $i; ?></td>
                <td><? echo $row[0]; ?></td>
                <td><? echo $row[1];?></td>
                <td><? echo $row[2];?></td>
             </tr>
         <?
		 	$i++;
			}
		?>
		</table>
<?
	} else {
		echo 'Data Tidak Ditemukan';
	}
	mysql_close();
	}
?>

</body>
</html>