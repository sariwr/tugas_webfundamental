<?php

if(isset($_GET['id'])){
	
	include('connect.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT id_pegawai FROM dbkaryawan WHERE id_pegawai='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}
	else
	{
		$del = mysql_query("DELETE FROM dbkaryawan WHERE id_pegawai='$id'");
		if($del)
		{
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="tampilan.php">Kembali</a>';	
			
		}
		else
		{
			echo 'Gagal menghapus data! ';		
			echo '<a href="tampilan.php">Kembali</a>';
		}
	}
}
?>