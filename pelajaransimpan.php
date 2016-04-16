<?php

if(isset($_GET['act']))

$cekdata="select nama_pelajaran from setup_pelajaran where nama_pelajaran='".$_POST['nama_pelajaran']."'";
$ada=mysql_query($cekdata) or die(mysql_error());

if(mysql_num_rows($ada)>0) {
	echo '<script>
	alert("NAMA MATA PELAJARAAN SUDAH TERDAFTAR !!!"); window.location="?page=pelajaraninput"; </script>';
exit();}

else if ((!$_POST['nama_pelajaran'])||(!$_POST['kkm'])) {
	echo '<script> 
	alert("Ada data yang masih kosong. Harap cek ulang !!!!"); window.location="?page=pelajaraninput"; </script>';
exit();}

else

{
	
	$rs=mysql_query("Insert into setup_pelajaran (`nama_pelajaran`,`kkm`) values ('".$_POST['nama_pelajaran']."','".$_POST['kkm']."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?page=pelajarantampil'</script>";
	}
}
?>