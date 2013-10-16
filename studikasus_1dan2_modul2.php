<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studi Kasus 1 dan 2</title>
</head>

<body>
<form style="background-color:#CF6" action="<? $_SERVER['PHP_SELF'];?>" method="post">
<table align="center" border="2" bordercolor="#006600">
	<tr>
    	<td colspan="3" align="center"><h1>FORM BIODATA MAHASISWA</h1></td>
    </tr>
	<tr>
		<td>Nama </td>
        <td>:</td>
        <td> <input type="text" name="nama" /></br></td>
    </tr>
    <tr>
    	<td>Offering</td>
        <td> : </td>
        <td> <input type="textbox" name="off" /></br></td>
	</tr>
    <tr>
    	<td>No Telp/ HP</td>
        <td> : </td>
        <td> <input  type="number" name="telp" /></br></td>
	</tr>
    <tr>
    	<td>jenis Kelamin</td>
        <td> :</td>
        <td>
        <select name ="jk">
            <option value="Laki-laki">Laki-laki
            <option value="Perempuan">Perempuan
    	</select> <br />
        </td>
    </tr>
    <tr>
    	<td>Hobby</td>
        <td> :</td>
        <td>
        <input type="checkbox"  name="hobby[]" value="Membaca" checked="checked"/>Membaca</br>
        <input type="checkbox" name="hobby[]" value="Olahraga"/>Olahraga</br>
        <input type="checkbox" name="hobby[]" value="Menyanyi"/>Menyanyi <br />
        </td>
    </tr>
    <tr>
    	<td colspan="3" align="center"><input type="submit" value="OK" />	</td>
    </tr>
 </table>
</form>

<?
//ekstraksi nilai
echo 'Nama : '.$_POST['nama'];
echo '<br/>Offering : '.$_POST['off'];
echo '<br/>No Telp : '.$_POST['telp'];


echo '<br /> Jenis Kelamin  :';
if (isset($_POST['jk'])) {
		echo ' '.$_POST['jk'];
}
echo '<br /> Hobby :';
if (isset ($_POST['hobby'])) {
	foreach ($_POST['hobby'] as $key => $val) {
		echo ' '.$val.', ';
	}
}

?>

</body>
</html>
