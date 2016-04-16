<form name="formdatasiswa" id="formdatasiswa">
<center><h2 align="center">&nbsp;</h2>
<table width="564" height="966" border="0">
 <?php
 $id_siswa=$_SESSION['id_siswa'];
  $rw=mysql_query("Select * from data_siswa where id_siswa='$id_siswa' order by id_siswa asc");
  while($s=mysql_fetch_array($rw))
  {
  ?>
    <tr>
      <td height="27" colspan="3"><h2>Identitas Siswa </h2></td>
      </tr>
    <tr>
      <td height="10">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="270" height="39">Nama Siswa </td>
      <td width="27">:</td>
      <td width="253"><?php echo $s['nama_siswa']; ?></td>
    </tr>
    <tr>
      <td height="37">NIS</td>
      <td>:</td>
      <td><?php echo $s['nis']; ?></td>
    </tr>
	<tr>
      <td height="40">NIS</td>
      <td>:</td>
      <td><?php echo $s['nis']; ?></td>
    </tr>
	<tr>
      <td height="36">NISN</td>
      <td>:</td>
      <td><?php echo $s['nisn']; ?></td>
    </tr>
    <tr>
      <td height="31">Tempat, Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo $s['kota'],',',$s['tgl'],'-',$s['bln'],'-',$s['thn']; ?></td>
    </tr>
    <tr>
      <td height="36">Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $s['kelamin']; ?></td>
    </tr>
	<tr>
      <td height="38">Agama</td>
      <td>:</td>
      <td><?php echo $s['agama']; ?></td>
    </tr>
	<tr>
      <td height="30">Status</td>
      <td>:</td>
      <td><?php echo $s['status']; ?></td>
    </tr>
	<tr>
      <td height="30">Anak Ke</td>
      <td>:</td>
      <td><?php echo $s['anakke']; ?></td>
    </tr>
    <tr>
      <td height="34">Alamat</td>
      <td>:</td>
      <td><?php echo $s['alamat_siswa']; ?></td>
    </tr>
	 <tr>
      <td height="32">Telpon Siswa</td>
      <td>:</td>
      <td><?php echo $s['telpon_siswa']; ?></td>
    </tr>
	 <tr>
      <td height="33">Sekolah Asal</td>
      <td>:</td>
      <td><?php echo $s['sekolahasal']; ?></td>
    </tr>
	 <tr>
      <td height="35">Diterima di sekolah ini</td>
      <td>:</td>
      <td></td>
    </tr>
	 <tr>
      <td height="37">Kelas</td>
      <td>:</td>
      <td><?php echo $s['kelas']; ?></td>
    </tr>
    <tr>
      <td height="40">Pada Tanggal</td>
      <td>:</td>
      <td><?php echo $s['pd_tgl'],'-',$s['pd_bln'],'-',$s['pd_thn']; ?></td>
    </tr>
	 <tr>
      <td height="25">Nama Orang Tua</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td height="40">a. Ayah</td>
      <td>:</td>
      <td><?php echo $s['ayah']; ?></td>
    </tr>
    <tr>
      <td height="30">b. Ibu</td>
      <td>:</td>
      <td><?php echo $s['ibu']; ?></td>
    </tr>
	<tr>
      <td height="35">Pekerjaan Orang Tua</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td height="32">a. Ayah</td>
      <td>:</td>
      <td><?php echo $s['pekerjaanayah']; ?></td>
    </tr>
    <tr>
      <td height="38">b. Ibu</td>
      <td>:</td>
      <td><?php echo $s['pekerjaanibu']; ?></td>
    <tr>
      <td height="41">Nama Wali </td>
      <td>:</td>
      <td><?php echo $s['wali']; ?></td>
    </tr>
	<tr>
      <td height="36">Alamat Wali </td>
      <td>:</td>
      <td><?php echo $s['alamatwali']; ?></td>
    </tr>
	<tr>
      <td height="30">Pekerjaan Wali </td>
      <td>:</td>
      <td><?php echo $s['pekerjaanwali']; ?></td>
    </tr>
	<?php
  }
  ?>
  </table>
  </center>
</form>
