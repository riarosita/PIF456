<?php
	session_start(); 
	$username=$_POST["username"];
	$password=$_POST["password"];
	$user = "ria";
	$pass = "110533430515";
	
	if($_POST['proses'] == 1)
	{
	    if($username != "" && $password != "")
	   {
		if($username == $user && $password == $pass )
		{
			$_SESSION['username']=$username;  
			echo "<center><h3>Anda telah login sebagai <font color=red>".$username."</font></h3></center>";
		}
		else 
		{
			echo "<font color=red><h3>Maaf inputan anda salah !</h3></font>";
		}
	   }
	   else
	   {
		echo "<font color=red>Silahhkan isi form terlebih dahulu !</font>";
	   }
	}
?>

<center>
<form name="login_akademik" method="post" action="studi_kasus.php"<? $PHP_SELF ?>">
	<table>
	<tr>
	  <td colspan="2" align="center" bgcolor="#CCFF00"><h1>FORM LOGIN<h1></td>
	</tr>
	<tr>
	  <td bgcolor="#CCFF00">Username</td>
	   <td><input name="username" type="text"></td>
	</tr>
	<tr>
	    <td bgcolor="#CCFF00">Password</td>  
	    <td><input name="password" type="password"><br/></td>
	</tr>
	<tr>
	<tr>
	    <td></td>
	    <td>
		<input name="proses" type="hidden" value="1">
		<input type="submit"  value="Login">
		</td>
	</tr>
	</table>
</form>
</center>

