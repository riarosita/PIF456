<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studi Kasus</title>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar navbar-inverse">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Ria R. Lestari</a>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 3<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="dropdown"><a href="Modul 3/awal.php">Lihat data</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 4 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="Modul 4/awal.php">Lihat Data</a></li>
          <li><a href="Modul 4/tugas/awal.php">Tugas</a></li>
        </ul>
      </li>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 5<b class="caret"></b></a>
        <ul class="dropdown-menu">
        	<li class="dropdown"><a href="Modul 5/studi_kasus.php">Studi Kasus</a></li>
          <li class="dropdown"><a href="Modul 5/tugas.php">Tugas</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href = "#"  class ="dropdown-toggle" data-toggle="dropdown">
    		<span class="glyphicon glyphicon-user"></span>
			    Ria R. Lestari
    		<b class="caret"></b>    						
        </a>
    	<ul class="dropdown-menu">
		    <li><a href="#">My Profile</a></li>
    	</ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/jquery.js"></script>
    <script src="dist/js/bootstrap-dropdown.js"></script>
    <script src="dist/js/bootstrap-collapse.js"></script>
    <script src="dist/js/application.js"></script>
    <script src="dist/js/bootstrap-affix.js"></script>
    <script src="dist/js/bootstrap-alert.js"></script>
    <script src="dist/js/bootstrap-button.js"></script>
    <script src="dist/js/bootstrap-carousel.js"></script>
    <script src="dist/js/bootstrap-modal.js"></script>
    <script src="dist/js/bootstrap-popover.js"></script>
    <script src="dist/js/bootstrap-scrollspy.js"></script>
    <script src="dist/js/bootstrap-tab.js"></script>
    <script src="dist/js/bootstrap-tooltip.js"></script>
    <script src="dist/js/bootstrap-typeahead.js"></script>

            
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