<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Set session</title>
</head>

<body>
<?
//inisialisasi data session
session_start();

//set_session jika belum ada
if (!isset($_SESSION['test'])) {
	$_SESSION['test'] = 'value';
} else {
	echo 'Session di set <br/>';
	// mencetak nilai session test
	echo 'Nilai'. $_SESSION['test'].'<br/>';
	
	// mencetak  semua elemen session
	print_r($_SESSION);
}

?>

<p>
tekan Refresh (F5);
</body>
</html>