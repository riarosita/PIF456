<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akses dan Manipulasi Data</title>
<style type="text/css">
.even {
	background: #ddd;
}
</style>
</head>

<body>
<?
	ini_set('display_error', 1);
	
	//menginclude file koneksi dan data handler
	require_once './koneksi.php';
	require_once './tugas.php';
	
	//konstanta nama tabel
	define ('MHS', 'mahasiswa');
	
	//memanggil fungsi data handler
	data_handler('?m=data');
?>
</body>
</html>