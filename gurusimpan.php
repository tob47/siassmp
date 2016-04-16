<?php
if(isset($_GET['act']))

$gambar=$_FILES['gambar']['name'];
$cekdata="select nip from data_guru where nip='".$_POST['nip']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NIP GURU SUDAH TERDAFTAR !!!"); window.location="?page=guruinput"; </script>';
exit();}

else if ((!$_POST['nama_guru'])||(!$_POST['nip'])||(!$_POST['kota'])||(!$_POST['agama'])||(!$_POST['alamat_guru'])||(!$_POST['pendidikan'])||(!$_POST['golongan'])||(!$_POST['jabatan'])||(!$_POST['username'])||(!$_POST['password'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?page=guruinput"; </script>';
exit();}

else

{	
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$gambar);
	$rs=mysql_query("Insert into data_guru (`nama_guru`,`nip`,`kota`,`tgl`,`bln`,`thn`,`kelamin`,`agama`,`alamat_guru`,`tm_tanggal`,`tm_bulan`,`tm_tahun`,`pendidikan`,`golongan`,`jabatan`,`gambar`,`username`,`password`) values ('".$_POST['nama_guru']."','".$_POST['nip']."','".$_POST['kota']."','".$_POST['tgl']."','".$_POST['bln']."','".$_POST['thn']."','".$_POST['kelamin']."','".$_POST['agama']."','".$_POST['alamat_guru']."','".$_POST['tm_tanggal']."','".$_POST['tm_bulan']."','".$_POST['tm_tahun']."','".$_POST['pendidikan']."','".$_POST['golongan']."','".$_POST['jabatan']."','".$_FILES['gambar']['name']."','".$_POST['username']."','".md5($_POST['password'])."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?page=gurutampil'</script>";
		
	}
}
?>