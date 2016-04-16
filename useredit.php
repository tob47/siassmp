<?php
ob_start();
if(isset($_GET['id_admin']))
{
	$rs=mysql_query("Select * from user_admin where sha1(username)='".$_GET['id_admin']."'");
	$row=mysql_fetch_array($rs);
?>
<form name="form1" method="post" action="?page=useredit&id_admin=<?php echo $_GET['id_admin']; ?>&edit=1">
<center>
  <table width="367" height="270" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="48" colspan="2"><h2 align="center">Edit Data Admin </h2></td>
    </tr>
    <tr>
      <td width="39%" height="40">Nama</td>
      <td width="61%">
      <input type="text" name="nama_admin" id="nama_admin" class="inp-form" value="<?php echo $row['nama_admin']; ?>" ></td>
    </tr>
	<tr>
      <td width="39%" height="40">Username</td>
      <td width="61%">
      <input type="text" name="username" id="username" class="inp-form" value="<?php echo $row['username']; ?>" ></td>
    </tr>
    <tr>
      <td width="39%" height="40">Password</td>
      <td><input type="password" name="password" id="password" class="inp-form" value="<?php echo $row['password']; ?>"></td>
    </tr>
    <tr>
      <td height="63">&nbsp; &nbsp; &nbsp;</td>
      <td><input type="submit" class="form-submit" name="button" id="button" value="Ubah">&nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=user'"></td>
    </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
}else{
	echo "<script>window.location='?page=user'</script>";
}
?>
<?php
if(isset($_GET['edit']))
 
{
	$rs=mysql_query("Update user_admin SET nama_admin='".$_POST['nama_admin']."',username='".$_POST['username']."',password='".md5($_POST['password'])."' Where sha1(username)='".$_GET['id_admin']."'");
	if($rs)
	{
		echo "<script>window.location='?page=user'</script>";
	}
}
?>
