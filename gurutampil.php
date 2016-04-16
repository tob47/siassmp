<span>
<h2>
<a href="?page=guruinput"><img src="images/tombol/cooltext1864696890.png" /></a></h2>
<p>
</p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" id="product-table"  >
   <tr bgcolor="#99CC33">
  <td width="6%"><div align="center"><strong>No </strong></div></td>
 	<td width="9%"><div align="center"><strong>NIP </strong></div></td>
    <td width="18%"><div align="center"><strong>Nama Guru </strong></div></td>
    <td width="21%"><div align="center"><strong>Pendidikan </strong></div></td>   
	<td width="15%"><div align="center"><strong>Jabatan </strong></div></td>
	<td width="17%"><div align="center"><strong>Golongan</strong></div></td>
	<td width="14%"><div align="center"><strong>Tools</strong></div></td>
	  <div align="center"></div>
  </tr>
  <?php
  $rw=mysql_query("Select * from data_guru order by nama_guru asc");
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
   <td align="center"><?php echo $c=$c+1;?></td>
    <td align="center"><?php echo $s['nip']; ?></td>
    <td><?php echo $s['nama_guru']; ?></td>
	<td><?php echo $s['pendidikan']; ?></td>
	<td><?php echo $s['jabatan']; ?></td>
	<td><?php echo $s['golongan']; ?></td>
    <td  width="14%"><a href="?page=guruedit&id_guru=<?php echo sha1($s['id_guru']); ?>">Edit</a> - <a href="?page=gurutampil&del=1&id_guru=<?php echo sha1($s['id_guru']); ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</span>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_guru'];
	$ff=mysql_query("Delete from data_guru Where sha1(id_guru)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?page=gurutampil'</script>";
	}
}
?>