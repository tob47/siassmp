<?php
if(isset($_GET['act']))

$cekdata="select nama_kelas from setup_kelas where nama_kelas='".$_POST['nama_kelas']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA KELAS SUDAH TERDAFTAR !!!"); window.location="?page=kelasinput"; </script>';
exit();}

else if ((!$_POST['nama_kelas'])||(!$_POST['jurusan'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?page=kelasinput"; </script>';
exit();}

else

{
	
	$rs=mysql_query("Insert into setup_kelas (`nama_kelas`,`jurusan`) values ('".$_POST['nama_kelas']."','".$_POST['jurusan']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?page=kelastampil'</script>";
	}
}
?>