<span>
<h2>
<a href="?page=pelajaraninput"><img src="images/tombol/cooltext1864696746.png" /></a></h2>
<p>
</p>
<table width="40%" border="0" cellspacing="0" cellpadding="0" id="product-table">
  <tr bgcolor="#99CC33">
  <td>No</td>
    <td width="41%" height="35">Nama Pelajaran</td>
    <td width="34%">Nilai KKM</td>   
    <td width="25%">Tools</td>
  </tr>
  <?php
  $rw=mysql_query("Select * from setup_pelajaran");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  	<td><?php echo $c=$c+1;?></td>
    <td><?php echo $s['nama_pelajaran']; ?></td>
	<td><?php echo $s['kkm']; ?></td>
    <td><a href="?page=pelajaranedit&id_pelajaran=<?php echo sha1($s['id_pelajaran']); ?>">Edit</a> - <a href="?page=pelajarantampil&del=1&id_pelajaran=<?php echo sha1($s['id_pelajaran']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_pelajaran'];
	$ff=mysql_query("Delete from setup_pelajaran Where sha1(id_pelajaran)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?page=pelajarantampil'</script>";
	}
}
?>
