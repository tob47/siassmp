<?php
ob_start();
if(isset($_GET['id_kelas']))
{
	$rs=mysql_query("Select * from setup_kelas where sha1(nama_kelas)='".$_GET['id_kelas']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?page=kelasedit&id_kelas=<?php echo $_GET['id_kelas']; ?>&edit=1">
<center>
  <table width="393" height="183" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2"><h2 align="center">Edit data Kelas </h2></td>
      </tr>
    <tr>
      <td width="155" height="40">Nama Kelas : </td>
      <td width="296">
      <input type="text" name="nama_kelas" class="inp-form" value="<?php echo $row['nama_kelas']; ?>"  /></td>
    </tr>
	<tr>
      <td width="155" height="35">Jurusan : </td>
		<td width="296"><label>
			<select name="jurusan" id="jurusan" class="styledselect_form_1">
			<option value="">--Jurusan--</option>
			<option value="SSN">SSN</option>
			<option value=""></option>
			<option value=""></option>
			</select></label>	  </td>
    </tr>
    <tr>
      <td height="31">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="form-submit" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=kelastampil'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?page=kelastampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))
{
	
	$rs=mysql_query("update setup_kelas set nama_kelas='".$_POST['nama_kelas']."',jurusan='".$_POST['jurusan']."' Where sha1(nama_kelas)='".$_GET['id_kelas']."'");
	if($rs)
	{
		echo "<script>window.location='?page=kelastampil'</script>";
	}
}
?>
