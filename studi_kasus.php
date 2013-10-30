<htm>
<head>
   <title>Data Mahasiswa</title>
      <script language="JavaScript">
      function konfirmasi(konf) {
        a = confirm('Yakin ingin menghapus mahasiswa dengan NIM '+ konf + ' ?');
        if (a == true) return true;
        else return false;
      }
      </script>
</head>
<body>

<?php 
require_once './koneksilagi.php';

$sql = 'SELECT * FROM mahasiswa order by NIM';
mysql_select_db($nama_db, $cnn) or die("database tidak ditemukan !");
$hasil_query = mysql_query($sql, $cnn) or die ("Maaf query anda salah !");
$jumlah_data = mysql_num_rows($hasil_query); 
$res = mysql_query($sql); 
if ($res) { 
  if (mysql_num_rows($res)) { ?> 
 
    <table border=1 cellspacing=1 cellpadding=5> 
    <tr> 
      <th>#</th> 
      <th width=100>NIM</th> 
      <th width=150>Nama</th>
      <th>Alamat</th>
      <th colspan=2 >Menu</th> 
    </tr> 
    <?php 
    $i = 1; 
    while ($row = mysql_fetch_row($res)) { ?> 
      <tr> 
        <td><?php echo $i;?></td> 
        <td><?php echo $row[0];?></td> 
        <td><?php echo $row[1];?></td> 
        <td><?php echo $row[2];?></td>
        <?php
        echo "<td><a href=\"edit.php?NIM=$row[0]\">Edit</a></td>";
        echo "<td><a href=\"hapus.php?NIM=$row[0]\" onclick=\"return konfirmasi('".$row[0],' dengan Nama ',$row[1]."')\">Hapus</a>";
        ?>
      </tr> 
      <?php $i++; 
    } ?> 
    </table>
    
  <?php
    } else { 
    echo 'Maaf, data tidak ditemukan !'; 
  } 
  @mysql_close($res); 
}
 
?>
</br>
<?php
echo "Jumlah Mahasiswa : $jumlah_data \t [<a href=tambah_data.php>Tambah Data</a>]";
?>
</body>
</html>
