<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Limitasi Data</title>
</head>

<body>
	<form method="post" action="" name="frm_select">
    Tampilkan
    <?
	$halaman = array("Pilih", 1, 5, 15, 20, 25); ?>
    <select name="row_page" onchange="document.forms.frm_select.submit();" >
		<?php foreach ($halaman as $hal): ?>
                <?php
            if ($_POST["row_page"] == $hal) $selected1 = "selected";
            else $selected1 = ""; ?>
                <option value="<?php echo $hal;?>" <?php echo $selected1; ?>>
                        <?php echo strtoupper($hal); ?>
                </option>
        <?php endforeach ?>
    </select>baris per halaman.
    </form>
    
<?
	if (isset($_POST['row_page']) && $_POST['row_page']) {
		require_once './koneksi.php';
		
		//batas baris data
		$row = $_POST['row_page'];
		
		//SQL untuk limitasi
		$sql = "SELECT * FROM mahasiswa LIMIT $row";
		
		$res = mysql_query($sql);
	
	if($res) {
		if (mysql_num_rows($res)) { ?>
        	<table border="1" cellspacing="1" cellpadding="5">
			<tr>
            	<th>#</th>
                <th width="100">NIM</th>
                <th width="150">Nama</th>
                <th>Alamat</th>
            </tr>
            <?
			$i = 1;
			while ($row = mysql_fetch_row($res)) { ?>
            	<tr>
                	<td>
                    	<? echo $i; ?>
                    </td>
                    <td>
                    	<? echo $row[0]; ?>
                    </td>
                    <td>
                    	<? echo $row[1]; ?>
                    </td>
                    <td>
                    	<? echo $row[2]; ?>
                    </td>
                </tr>
                <?
				$i++;
			}
			?>
            </table>
		<?
		} else {
			echo 'Data tidak ditemukan ';
	}
	}
	}
?>
</body>
</html>