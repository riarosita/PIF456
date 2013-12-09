<?php
//File:seleksi.php

require_once './koneksi.php';

$sql = 'SELECT * FROM mahasiswa';
$res = mysql_query($sql);
if ($res)
{
	if (mysql_num_rows($res))
	{
		?>
		<table width="500" border=1 align="center" cellpadding=0 cellspacing=0>
		<tr>
			<th width="28" bgcolor="#FF9900">No</th>
			<th width=129 bgcolor="#FF9900">NIM</th>
			<th width=159 bgcolor="#FF9900">Nama</th>
			<th width="111" bgcolor="#FF9900">Alamat</th>
		</tr>
		<?php
			$i = 1;
			while ($row = mysql_fetch_row($res))
			{
				?>
				<tr>
					<td>
						<?php echo $i;?>
					</td>
					<td>
						<?php echo $row[0];?>
					</td>
					<td>
						<?php echo $row[1];?>
					</td>
					<td>
						<?php echo $row[2];?>
					</td>
				</tr>
				<?php
				$i++;
			}
			?>
			</table>
		<?php
	}
	else
	{
		echo 'Data Tidak Ditemukan';
	}
	//mysql_close($res);
}
?>				