<!DOCTYPE html >
 <html>
 <head>
 
 <script language="JavaScript">
    // konfirmasi menghapus record tertentu
    function konfirmasi(id)
    {
        tanya = confirm('Anda yakin ingin menghapus data dengan NIM '+ id + '?');
        if (tanya == true)
            return true;
        else
            return false;
    }
 </script>
 </head>

<?
	$server	= "localhost";
	$username = "root";
	$password = "";
	$database = "modul4";

	$conn = mysql_connect($server,$username,$password) or die("Koneksi gagal");
	mysql_select_db($database, $conn) or die("Gagal membuka database.");
	$ib=$_GET['nim'];
	$query1=mysql_query("DELETE FROM mahasiswa WHERE 0='".$ib."'");
	if ($query1) {
		echo"<script>alert('Yakin Akan Menghapus data mahasiswa dengan nim ' + $ib + ' ?')</script>";
		echo"<script>window.location='awal.php'</script>";
	}
	else{
		echo"<script>alert('Data Tidak dapat Dihapus !')</script>";
		echo"<script>window.location='awal.php'</script>";
	}
	
	
?>


















 