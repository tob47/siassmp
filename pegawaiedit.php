<?php
ob_start();
if(isset($_GET['id']))
{
	$rs=mysql_query("Select * from pegawai where sha1(id)='".$_GET['id']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?page=pegawaiedit&id=<?php echo $_GET['id']; ?>&edit=1">
<center>
  <table width="451" height="155" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="40" colspan="2"><h2 align="center">Edit Nama Golongan </h2></td>
      </tr>
    <tr>
      <td width="44%" height="40">Nama Golongan </td>
      <td width="56%">
      <input type="text" name="namapegawai" id="namapegawai" class="inp-form" value="<?php echo $row['namapegawai']; ?>" maxlength="30" /></td>
    </tr>
	  <tr>
		  <td height="40">Pengertian </td>
		  <td><input name="pengertian" type="text" class="inp-form" id="pengertian" value="<?php echo $row['pengertian']; ?>" maxlength="30" /></td>
	  </tr>
    <tr>
      <td height="35">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="form-submit" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=pegawaitampil'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?page=pegawaitampil'</script>";
}
?>
<?php
if(isset($_GET['edit']))
{
	
	$rs=mysql_query("Update pegawai SET namapegawai='".$_POST['namapegawai']."',pengertian='".$_POST['pengertian']."' Where sha1(id)='".$_GET['id']."'");
	if($rs)
	{
		echo "<script>window.location='?page=pegawaitampil'</script>";
	}
}
?>
