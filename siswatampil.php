<span class="">
<h2>
<?
$hsl= mysql_query('select * from data_siswa');
	  
	  $num_rows = mysql_num_rows($hsl);
	  echo "Jumlah anggota yang terdaftar = <b>$num_rows</b> siswa\n";
	  ?>
<a href="?page=siswainput"><img src="images/tombol/cooltext1864696297.png" /></a></h2>
<p>
</p>
<table width="93%" border="0" cellspacing="0" cellpadding="0" id="product-table">
 <tr bgcolor="#99CC33">
  <td width="5%"><div align="center">No</div></td>
    <td width="15%"><div align="center">Nomor Induk</div></td>
	  <td width="17%"><div align="center">Nama</div></td>
    <td width="15%"><div align="center">No. HP/Telp</div></td>   
	<td width="13%"><div align="center">Jenis Kelamin</div></td>
	<td width="12%"><div align="center">Agama</div></td>
	<td width="13%"><div align="center">Kelas</div></td>
    <td width="10%"><div align="center">Tools</div></td>
  </tr>
  <?php
  $rw=mysql_query("Select * from data_siswa order by nama_siswa asc");
  while($s=mysql_fetch_array($rw))
   {
   
  ?>
  <tr>
  <td><?php echo @$c=$c+1;?></td>
    <td align="center"><?php echo $s['nis']; ?></td>
	<td><?php echo $s['nama_siswa']; ?></td>
    <td align="center"><?php echo $s['telpon_siswa']; ?></td>
	<td><?php echo $s['kelamin']; ?></td>
	<td><?php echo $s['agama']; ?></td>
	<td><?php echo $s['kelas']; ?></td>
    <td><a href="?page=siswaedit&id_siswa=<?php echo sha1($s['id_siswa']); ?>">Edit</a> - <a href="?page=siswatampil&del=1&id_siswa=<?php echo sha1($s['id_siswa']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_siswa'];
	$ff=mysql_query("Delete from data_siswa Where sha1(id_siswa)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?page=siswatampil'</script>";
	}
}
?>