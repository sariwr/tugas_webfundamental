<!DOCTYPE html>
<html>

<body><center>
	
	
	<h1>INPUT DATA PEGAWAI</h1>
	
	<?php
	include('connect.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM dbkaryawan WHERE id_pegawai='$id'");
	
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);	
	}
	?>
	<form action="edit-proses.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<TABLE cellpadding="5" cellspacing="0">
		<TR>
			<TD>ID PEGAWAI</TD>
			<TD><INPUT type="text" name ="id_pegawai" value="<?php echo $data['id_pegawai']; ?>" required></TD>
		</TR>
		<TR>
			<TD>NAMA</TD>
			<TD><INPUT type ="text" name ="nama" value="<?php echo $data['nama']; ?>" required></TD>
		</TR>
		<TR>
			<TD>ALAMAT</TD>
			<TD><INPUT type ="text" name ="alamat" value="<?php echo $data['alamat']; ?>" required></TD>
		</TR>
		<TR>
			<TD>MASA KERJA</TD>
			<TD><INPUT type ="text" name ="masa_kerja" value="<?php echo $data['masa_kerja']; ?>" required></TD>
		</TR>
		<TR>
			<TD>STATUS</TD>
			<TD>
				<select type ="text" name="status" value="<?php echo $data['status']; ?>" required>
				<option value="Kawin">Kawin</option>
				<option value="Belum Kawin">Belum Kawin</option>
				</select>
			</TD>
		</TR>
		<TR>
			<TD>JUMLAH ANAK</TD>
			<TD><INPUT type ="text" name ="jml_anak" value="<?php echo $data['jml_anak']; ?>" required></TD>
		</TR>
		<tr>
				<td>&nbsp;</td>
				
				<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>		
	</TABLE>
	</form>
<center>
</body>
</html>