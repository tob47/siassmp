<?php
if(isset($_GET['act']))

$gambar=$_FILES['gambar']['name'];
$cekdata="select nis from data_siswa where nis='".$_POST['nis']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

$cekricek="select nisn from data_siswa where nisn='".$_POST['nisn']."'";
$adadihati=mysql_query($cekricek) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NOMOR INDUK SISWA SUDAH TERDAFTAR !!!"); window.location="?page=siswainput"; </script>';
exit();}

else if(mysql_num_rows($adadihati)>0) {
	echo '<script>
	alert("NOMOR INDUK SISWA NASIONAl SUDAH TERDAFTAR !!!"); window.location="?page=siswainput"; </script>';
exit();}

else if ((!$_POST['nama_siswa'])||(!$_POST['nis'])||(!$_POST['nisn'])||(!$_POST['kota'])||(!$_POST['kelamin'])||(!$_POST['agama'])||(!$_POST['status'])||(!$_POST['anakke'])||(!$_POST['alamat_siswa'])||(!$_POST['telpon_siswa'])||(!$_POST['sekolahasal'])||(!$_POST['kelas'])||(!$_POST['ayah'])||(!$_POST['ibu'])||(!$_POST['alamatortu'])||(!$_POST['hportu'])||(!$_POST['pekerjaanayah'])||(!$_POST['pekerjaanibu'])||(!$_POST['username'])||(!$_POST['password'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?page=siswainput"; </script>';
exit();}

else

{
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$gambar);
	$rs=mysql_query("Insert into data_siswa (`nama_siswa`,`nis`,`nisn`,`kota`,`tgl`,`bln`,`thn`,`kelamin`,`agama`,`status`,`anakke`,`alamat_siswa`,`telpon_siswa`,`sekolahasal`,`kelas`,`pd_tgl`,`pd_bln`,`pd_thn`,`ayah`,`ibu`,`alamatortu`,`hportu`,`pekerjaanayah`,`pekerjaanibu`,`wali`,`alamatwali`,`hpwali`,`pekerjaanwali`,`gambar`,`username`,`password`) values 
	('".$_POST['nama_siswa']."','".$_POST['nis']."','".$_POST['nisn']."','".$_POST['kota']."','".$_POST['tgl']."','".$_POST['bln']."','".$_POST['thn']."','".$_POST['kelamin']."','".$_POST['agama']."','".$_POST['status']."','".$_POST['anakke']."','".$_POST['alamat_siswa']."','".$_POST['telpon_siswa']."','".$_POST['sekolahasal']."','".$_POST['kelas']."','".$_POST['pd_tgl']."','".$_POST['pd_bln']."','".$_POST['pd_thn']."','".$_POST['ayah']."','".$_POST['ibu']."','".$_POST['alamatortu']."','".$_POST['hportu']."','".$_POST['pekerjaanayah']."','".$_POST['pekerjaanibu']."','".$_POST['wali']."','".$_POST['alamatwali']."','".$_POST['hpwali']."','".$_POST['pekerjaanwali']."','".$_FILES['gambar']['name']."','".$_POST['username']."','".md5($_POST['password'])."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?page=siswatampil'</script>";
		
	}
}
?>

