<html>
<body>
	<BR>
	<h3><center>DATA PEGAWAI</h3>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
		<tr bgcolor="pink">
			<th>No.</th>
			<th>ID PEGAWAI</th>
			<th>NAMA LENGKAP</th>
			<th>ALAMAT</th>
			<th>MASA KERJA</th>
			<th>STATUS</th>
			<th>JUMLAH ANAK</th>
			<th>OPSI</th>
		</tr>
	<?php
		include('connect.php');
		$query = mysql_query("SElECT * FROM dbkaryawan ORDER BY id_pegawai ASC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){
			echo '<tr><td colspan="6">Tidak Ada Ada!</td></tr>';
			
		}else{
			$no = 0;
			while($data = mysql_fetch_assoc($query)){ $no++;
				echo '<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td>'.$data['id_pegawai'].'</td>';
					echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['alamat'].'</td>';
					echo '<td>'.$data['masa_kerja'].'</td>';
					echo '<td>'.$data['status'].'</td>';
					echo '<td>'.$data['jml_anak'].'</td>';
					echo '<td><a href="edit.php?id='.$data['id_pegawai'].'">Edit</a> / 
					<a href="hapus.php?id='.$data['id_pegawai'].'" 
					onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				echo '</tr>';
						
			}
		}
	?>
	</table>
</body>
<html>