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
    <script src="dist/js/bootstrap-typeahead.js"></script><br /><br />

<form action="index.php?page=ganerate" method="post">
  <p>&nbsp;</p>
  <table width="570" border="0" align="center" cellpadding="0" cellspacing="0"  bordercolor="orange">
  <tr>
    <td><table width="570" border="1" align="center" cellpadding="0" cellspacing="0"  bordercolor="orange">
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
      <tr>
        <th width="100">&nbsp;</th>
      </tr>
      <tr>
        <td colspan="4" bgcolor="#FFFF66"><b>PENGURUTAN DATA</b></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFF66"> No </td>
        <td width="112" align="center" bgcolor="#FFFF66"><a href='export.php?orderby=nim&amp;urut=<?=$urutbaru;?>'>Nim</a></td>
        <td width="163" align="center" bgcolor="#FFFF66"><a href='export.php?orderby=nama&amp;urut=<?=$urutbaru;?>'>Nama</a></td>
        <td width="185" align="center" bgcolor="#FFFF66"><a href='export.php?orderby=alamat&amp;urut=<?=$urutbaru;?>'>Alamat</a></td>
      </tr>
      <tr>
        <td></td>
      </tr>
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
      <tr>
        <td><input type="submit" class="btn-success" value="Genarate to  xls" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
  <p>&nbsp;</p>
</form>

</body>
</html>