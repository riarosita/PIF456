<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tugas Praktikum - Modul 5</title>
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


<B>PENGURUTAN DATA</B><br /><br />

        <table border="1" width="500px">

                <?php
                        require "koneksi.php";
                        $query1 = "SELECT * FROM mahasiswa ORDER BY nim ";
                        $urut = 'asc';
                        $urutbaru = 'asc';
                        if(isset($_GET['orderby'])){
                                $orderby=$_GET['orderby'];
                                $urut=$_GET['urut'];
                                
                                $query1="SELECT * FROM mahasiswa order by $orderby $urut ";
                                if($urut=='asc'){
                                        $urutbaru='desc';
                                }else{
                                        $urutbaru='asc';
                                }
                        }
                ?>
<th>
<td><a href='tugas.php?orderby=nim&urut=<?=$urutbaru;?>'>Nim</a></td>
<td><a href='tugas.php?orderby=nama&urut=<?=$urutbaru;?>'>Nama</a></td>
<td><a href='tugas.php?orderby=alamat&urut=<?=$urutbaru;?>'>Alamat</a></td>
</th>
<?php
                        $result = mysql_query($query1) or die (mysql_error());
                        $no = 1;
                        while($rows=mysql_fetch_object($result)){
                ?>

<tr>
<td><?php echo $no ?></td>
<td><?php echo $rows -> nim;?></td>
<td><?php echo $rows -> nama;?></td>
<td><?php echo $rows -> alamat;?></td>
</tr>
<?php
                        $no++;
                        }
                ?>

</table>
</body>
</html>