<?php
$host="localhost";
$user="root";
$pass="";
$db="db_akademikk";

$entries=10;
$waktu=date("Y-m-d H:i:s");
	
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
	echo "Gagal koneksi";
}
?>