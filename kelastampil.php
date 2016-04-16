<span>
<h2>
<a href="?page=kelasinput" ><img src="images/tombol/cooltext1864694576.png" /></a></h2>
<p>
</p>
<table width="63%" border="0" cellspacing="0" cellpadding="0" id="product-table" >
  <tr bgcolor="#99CC33">
  <td width="6%"><div align="center">No</div></td>
	<td width="17%"><div align="center">Nama Kelas</div></td>
    <td width="23%"><div align="center">Jurusan</div></td>
    <td width="15%"><div align="center">Tools</div></td>
  </tr>
  <?php
  $rw=mysql_query("Select * from setup_kelas order by nama_kelas asc");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  <td align="center"><?php echo $c=$c+1;?></td>
	<td align="center"><?php echo $s['nama_kelas']; ?></td>
    <td align="center"><?php echo $s['jurusan']; ?></td>
    <td><div align="center"><a href="?page=kelasedit&id_kelas=<?php echo sha1($s['nama_kelas']); ?>">Edit</a> - <a href="?page=kelastampil&del=1&id_kelas=<?php echo sha1($s['id_kelas']); ?>">Hapus</a></div></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_kelas'];
	$ff=mysql_query("Delete from setup_kelas Where sha1(id_kelas)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?page=kelastampil'</script>";
	}
}
?>