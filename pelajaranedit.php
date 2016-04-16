<?php
ob_start();
if(isset($_GET['id_pelajaran']))
{
	$rs=mysql_query("Select * from setup_pelajaran where sha1(id_pelajaran)='".$_GET['id_pelajaran']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?page=pelajaranedit&id_pelajaran=<?php echo $_GET['id_pelajaran']; ?>&edit=1">
<center>
  <table width="451" height="121" border="0" cellspacing="0" cellpadding="0">
	 <tr>
      <td height="40" colspan="2"><h2 align="center">Edit Nama Pelajaran</h2></td>
      </tr><tr>
      <td width="64%" height="40">Nama Pelajaran</td>
      <td width="64%">
      <input type="text" name="nama_pelajaran" class="inp-form" id="nama_pelajaran" value="<?php echo $row['nama_pelajaran']; ?>" ></td>
    </tr>
	<tr>
      <td width="64%" height="36">Nilai KKM</td>
      <td width="64%"><label for="kkm"></label>
      <input type="text" name="kkm" id="kkm" class="inp-form" value="<?php echo $row['kkm']; ?>" ></td>
    </tr>
    
    <tr>
      <td height="45">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="form-submit" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=pelajarantampil'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?page=pelajarantampil'</script>";
}
?>
<?php
if(isset($_GET['edit']))
{
	
	$rs=mysql_query("Update setup_pelajaran SET nama_pelajaran='".$_POST['nama_pelajaran']."',kkm='".$_POST['kkm']."' Where sha1(id_pelajaran)='".$_GET['id_pelajaran']."'");
	if($rs)
	{
		echo "<script>window.location='?page=pelajarantampil'</script>";
	}
}
?>
