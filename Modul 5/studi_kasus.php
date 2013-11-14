<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studi Kasus</title>
</head>
<body>            
<b>LIMITASI DAN PEMBERIAN HALAMAN</b><br /><br />
                
<?php
    $host ="localhost";
	$user = "root";
	$pass = " ";
	$db = "modul4";
    $conn = mysql_connect($host, $user);
    $rec_limit = 5;

        if(! $conn )
            {
                die('Koneksi gagal : ' . mysql_error());
            }
        
        mysql_select_db('modul4');
        $sql = "SELECT count(nim) FROM mahasiswa ";
        $retval = mysql_query( $sql, $conn );
         if(! $retval )
                        {
                die('Gagal memilih database: ' . mysql_error());
                        }
                        
        $row = mysql_fetch_array($retval, MYSQL_NUM );
        $rec_count = $row[0];
			if( isset($_GET{'page'} ) )
						{
								$page = $_GET{'page'} + 1;
								$offset = $rec_limit * $page;
				}
			else
			   {
								$page = 0;
								$offset = 0;
						}
                
        $left_rec = $rec_count - ($page * $rec_limit);
        
        $sql = "SELECT nim, nama, alamat FROM mahasiswa LIMIT $offset, $rec_limit";

        $retval = mysql_query( $sql, $conn );
        if(! $retval )
                {
                        die('Gagal memilih database: ' . mysql_error());
                }
?>


<table border=1 cellspacing=1 callpadding=5>
        <tr>
<th>#</th>
<th width=100>NIM</th>
<th width=150>Nama</th>
<th>Alamat</th>
</tr>
        
        
<?php
        while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
        {
        $i=1;
?>
        <tr>
                <td>
                        <?php echo $i; ?>
                </td>
                <td>
                        <?php echo $row['nim']; ?>
                </td>
                <td>
                        <?php echo $row['nama']; ?>
                </td>
                <td>
                        <?php echo $row['alamat']; ?>
                </td>
        </tr>
        
        
<?php
        }
?>


</table>

<?php

        if( $page > 0 )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last...  Records</a> |";
            echo "<a href=\"?page=$page\">Next...  Records</a>";
        }
     else if( $page == 0 )
        {
            echo "<a href=\"?page=$page\">Next... Records</a>";
        }
        else if( $left_rec < $rec_limit )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last...  Records</a>";
        }
    mysql_close($conn);
?>