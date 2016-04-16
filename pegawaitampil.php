<span>
<h2>
<a href="?page=pegawaiinput"><img src="images/tombol/cooltext1864697097.png" /></a></h2>
<p>
</p>
<table width="52%" border="0" cellspacing="0" cellpadding="0" id="product-table">
   <tr bgcolor="#99CC33">
  <td width="12%">No</td>
    <td width="35%">Nama Golongan</td>
    <td width="35%">Pengertian</td>   
    <td width="18%">Tools</td>
  </tr>
  <?php
  $rw=mysql_query("Select * from pegawai");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  <td><?php echo $c=$c+1;?></td>
    <td><?php echo $s['namapegawai']; ?></td>
	<td><?php echo $s['pengertian']; ?></td>
    <td><a href="?page=pegawaiedit&id=<?php echo sha1($s['id']); ?>">Edit</a> - <a href="?page=pegawaitampil&del=1&id=<?php echo sha1($s['id']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>


<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id'];
	$ff=mysql_query("Delete from pegawai Where sha1(id)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='? page=pegawaitampil'</script>";
	}
}
?>
