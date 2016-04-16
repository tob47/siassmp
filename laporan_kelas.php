<html><title>DATA  KELAS SMP HARAPAN BERSAMA</title>
<style>
@media print {
input.noPrint { display: none; }
}
</style>

<body>

<table width="631" border="0" align="center">
  <tr>
    <td width="154" rowspan="6"><div align="center"><img src="images/poltek.png" width="147" height="129"></div></td>
    <td width="461">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong><font size="+1">SMP HARAPAN BERSAMA  KOTA TEGAL</font></strong></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">Jalan Raya Ahmad Kota. Tegal Telp. (0283) 619873 </div></td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
  </tr>
</table>
<div align="center"><strong><font size="+1">LAPORAN DATA KELAS </font></font></strong></div>
<div style="text-align:center;padding:10px;">
	<input class="noPrint" type="button" value="Cetak Laporan" onClick="window.print()">
</div>
<table width='728' height="80" border='1' align='center' cellpadding="0" cellspacing="0">
  <tr style="color: #FFFFFF" bgcolor="#999999">
    <td width='58' height="30"><div align="center">No</div></td>
    <td width='116'><div align="center">Nama Kelas</div></td>
    <td width='119'><div align="center">Jurusan </div></td>
  
    <td width='189'><div align="center">Wali Kelas </div></td>
	<td width='143'><div align="center">NIP </div></td>
	
  </tr>
<?php
include "conn.php";
		$view=mysql_query("select * from tbl_jwalikelas jwalikelas, data_guru guru where jwalikelas.id_guru=guru.id_guru order by jwalikelas.id_jwalikelas asc");
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr bordercolor='#6699FF'>
            <td height="30" align="center"><?php echo $no=$no+1;?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_kelas'];?></td>
            <td align="center"><?php echo $row['jurusan'];?></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nama_guru'];?>
              <div align="center"></div></td>
            <td align="center"><?php echo $row['nip'];?></td>
        </tr>
		<?php
		}
		?>
</table>

</body>
</html>