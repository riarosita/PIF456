<?php
require_once './koneksi.php';

$db = 'modul4';

$res = mysql_query('CREATE DATABASE'. $db);
if ($res) {
	echo 'Database '.$db. ' Created';
	mysql_close($res);
} else {
echo mysql_error();
}
?>