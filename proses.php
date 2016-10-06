<?PHP
	
include_once("connect.php");
	
	$id_pegawai 	=$_POST['id_pegawai'];
	$nama 			=$_POST['nama'];
	$alamat			=$_POST['alamat'];
	$masa_kerja		=$_POST['masa_kerja'];
	$status 		=$_POST['status'];
	$jml_anak		=$_POST['jml_anak'];

$insert ="INSERT INTO dbkaryawan (
	
	id_pegawai,
	nama,
	alamat,
	masa_kerja,
	status,
	jml_anak
	)
	VALUES(
	
	$id_pegawai,
	'$nama',
	'$alamat',
	'$masa_kerja',
	'$status',
	'$jml_anak'
	)";
	
	$cek = mysql_num_rows(mysql_query("SELECT * FROM dbkaryawan WHERE id_pegawai='$id'"));
if ($cek > 0){
echo "<script>window.alert('ID_PEGAWAI yang anda masukan sudah ada')
window.location='input.html'</script>";

}else {
mysql_query($insert);

echo "<script>window.alert('DATA SUDAH DISIMPAN')
window.location='tampilan.php'</script>";
}

?>