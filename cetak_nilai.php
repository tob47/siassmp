<?php
//$aksi="modul/mod_krs/aksi_krs.php";
$act=$_GET[act];
switch($act) {
	// Cari Data Nilai
	default:
	$thn_skrg=date("Y");
echo "<h2>Cari Data Nilai</h2>
<form method=POST action='detail_raport.php' target='_blank'>
<table width='400' height='100'>
	<tr>
		<td >Nomor Induk Siswa*</td>
		<td> :</td>
		<td> <select name=nim class=styledselect_form_1>"; 
		$sql=mysql_query("SELECT * FROM data_siswa order by nis");
		while ($data=mysql_fetch_array($sql))
		{
			echo "<option value='$data[nis]'>$data[nama_siswa] - $data[nis]</option>";
			
		}
	echo "</select></td>
</tr>
<tr>
<td></td>
<td></td>
<td colspan=2><input type=submit value='Cari' class='form-cetak'></td>
</tr>
</table>
</form>";
break;
}

?>