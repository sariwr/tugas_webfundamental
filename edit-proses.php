<?php

if(isset($_POST['simpan'])){
	
	include('connect.php');
	
	
	$id_pegawai		= $_POST['id_pegawai'];	
	$nama			= $_POST['nama'];	
	$alamat			= $_POST['alamat'];
	$masa_kerja		= $_POST['masa_kerja'];
	$status			= $_POST['status'];
	$jml_anak		= $_POST['jml_anak'];
	
	$update = mysql_query("UPDATE dbkaryawan SET nama='$nama', alamat='$alamat', masa_kerja='$masa_kerja', status='$status', jml_anak='$jml_anak' WHERE id_pegawai='$id'") or die(mysql_error());
	
	if($update)
	{
		echo "<script>window.alert('DATA BERHASIL DIPERBARUI')
		window.location='tampilan.php'</script>";	
	}
	else
	{
		echo "<script>window.alert('DATA GAGAL DIPERBARUI')
		window.location='tampilan.php'</script>";	
	}
}

?>