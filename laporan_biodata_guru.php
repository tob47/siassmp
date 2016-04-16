<html><title>IDENTITAS GURU</title>
<style>
@media print {
input.noPrint { display: none; }
}
</style>

<body>

<table width="631" border="0" align="center">
  <tr>
    <td width="158" rowspan="6"><div align="center"><img src="images/poltek.png" width="159" height="138"></div></td>
    <td width="463">&nbsp;</td>
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
    <td><div align="center">
      <div align="center">
        <p>Jalan Raya Ahmad Kota. Tegal Telp. (0283) 619873 </p>
      </div>
    </div></td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
  </tr>
</table>
<div align="center"><strong><font size="+1">LAPORAN IDENTITAS GURU </font></font></strong></div>
<div style="text-align:center;padding:10px;">
	<input class="noPrint" type="button" value="Cetak Laporan" onClick="window.print()">
</div>
 <form name="formdataguru" id="formdataguru">
<center>
  <table width="502" height="500" border="0">
 <?php
 
include "conn.php";
 
 $id_guru=$_SESSION['id_guru'];
 
  $rw=mysql_query("Select * from data_guru where id_guru='$id_guru' order by id_guru asc");
  while($s=mysql_fetch_array($rw))
  {
  ?>
    <tr>
      <td height="27" colspan="3"><h2>Identitas Guru</h2></td>
      </tr>
    <tr>
      <td height="27">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="174" height="27">Nama Guru </td>
      <td width="22">:</td>
      <td width="292"><?php echo $s['nama_guru']; ?></td>
    </tr>
    <tr>
      <td height="30">NIP</td>
      <td>:</td>
      <td><?php echo $s['nip']; ?></td>
    </tr>
    <tr>
      <td height="24">Tempat, Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo $s['kota'],',',$s['tgl'],'-',$s['bln'],'-',$s['thn']; ?></td>
    </tr>
    <tr>
      <td height="30">Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $s['kelamin']; ?></td>
    </tr>
	<tr>
      <td height="30">Agama</td>
      <td>:</td>
      <td><?php echo $s['agama']; ?></td>
    </tr>
    <tr>
      <td height="25">Alamat</td>
      <td>:</td>
      <td><?php echo $s['alamat_guru']; ?></td>
    </tr>
    <tr>
      <td height="30">Terhitung Mulai</td>
      <td>:</td>
      <td><?php echo $s['tm_tanggal'],'-',$s['tm_bulan'],'-',$s['tm_tahun']; ?></td>
    </tr>
    <tr>
      <td height="24">Pendidikan</td>
      <td>:</td>
      <td><?php echo $s['pendidikan']; ?></td>
    </tr>
    <tr>
      <td height="30">Golongan</td>
      <td>:</td>
      <td><?php echo $s['golongan']; ?></td>
    </tr>
    <tr>
      <td height="30">Jabatan </td>
      <td>:</td>
      <td><?php echo $s['jabatan']; ?></td>
    </tr>
	<?php
  }
  ?>
  </table>
  </center>
</form>

</body>
</html>