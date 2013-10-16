<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Tugas Praktikum (LOGIN)</title>

<script type="text/javascript">

// Fungsi check --> mengecheck kosong atau tidaknya inputan
function check()
{
	if(formLogin.username.value == "")
	{
		alert('Masukkan username !');
		document.formLogin.username.focus();
		return false;
	}
	else if(formLogin.password.value=="")
	{
		alert('Masukkan Password !');
		document.formLogin.password.focus();
		return false;
	}
	return true;
}

// Fungsi Huruf --> mengecheck apakah inputan sudah berupa huruf 
function Huruf(evt)
{
evt = (evt) ? evt : window.event
var charCode = (evt.which) ? evt.which : 
evt.keyCode

if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
	alert('Maaf, User Name dan Password Harus Berupa Huruf,,, ');
	return false;
}
	return true;
}
</script>

<style type="text/css">

#satu {
position:absolute;
width:358px;
height:330px;
z-index:1;
left: 159px;
top: 31px;
background-color: #FFFFFF;
border: 2px solid Blue;
}
#dua {
position:absolute;
width:300px;
height:115px;
z-index:2;
top: 50px;
left: 50px;
}
#tiga {
	position:absolute;
	width:80px;
	height:27px;
	z-index:2;
	left: 151px;
	top: 220px;
}

#header{
width:358px;
height:79px;
background-color:#09F;
}
#body{
width:358px;
height:230px;
background-color:#CCC;
}
#empat {
position:absolute;
width:355px;
height:221px;
z-index:2;
left: 0px;
top: 350px;
background-color:#666;
}

body {
background-color:#CC9;
}
</style>
</head>

<body onLoad="document.formLogin.username.focus

();">

<form style="background-color:#CCC" name="formLogin" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return check(this)">

<div id="satu">
<div id="header">
<div align="center">Selamat Datang Di Halaman Login Ria....

</div>

<div id="body">
<div id="dua">
<div align="left"><strong><br>Username :</strong>

<br>
<input type="text" name="username" size="35" value="" title="input harus berupa huruf" style="background-color:#9F0" autocomplete="off"onKeyUp="return Huruf(event)">
<br>
<br>

<strong>Password : </strong>
<br>
<input type="password" name="password" size="35" title= "input harus berupa huruf" style="background-color:#9F0" autocomplete="off" onKeyUp="return Huruf(event)">
<br>
<br>

</div>
</div>

<br>
<div id="tiga">
<input type="submit" name="submit" value=" L O G I N " style="background-color:#9F0">
</div>
</div>
</div>

</form>
<div id="empat">
<?php
// mengecek apakah inputan username dan password bernilai string 

if(is_string($_POST['username']) AND ($_POST['password']))
{
	if (($_POST['username']=='ria')AND($_POST['password']=='ria'))
	{
		echo 'Selamat Datang di Halaman Percobaan Login.</br>';
		echo 'Anda Login dengan keterangan :';
		echo '<br>Username : ' . $_POST['username'];
		echo '<br>Password : ' .$_POST['password'];
	}
	else
	{
		echo "<script>alert ('Anda menginputkan username dan password yang salah,,,, Silahkan coba lagi!!');</script>";
	}
}
?>
</div>
</body>
</html>
