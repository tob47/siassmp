<?php
ob_start();
?>
<form name="form1" method="post" action="?page=user&act=1">
		<table width="272" border="0" id="id-form">
          <tr>
            <td width="99">Nama</td>
            <td width="10">:</td>
            <td width="153"><input type="text" name="nama_admin" id="nama_admin" class="inp-form"/></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" id="username" class="inp-form"/></td>
          </tr>
          <tr>
            <td height="33">Password</td>
            <td>:</td>
            <td><input type="password" name="password" id="password" class="inp-form"/></td>
          </tr>
          <tr>
            <td height="36">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" class="form-submit" name="button" id="button">
            <input type="reset" class="form-reset" name="reset" id="reset"></td>
          </tr>
        </table>
		<label></label>
		<p></p>
      &nbsp;&nbsp;
</form>
<?php
ob_end_flush();
?>
<p></p>
<table width="68%" border="0" cellspacing="0" cellpadding="0" id="product-table" >
  <tr bgcolor="#99CC33">
   <td width="5%"><div align="center">NO</div></td>  
	<td width="28%"><div align="center">Nama</div></td>
    <td width="23%"><div align="center">Username</div></td>
	<td width="31%"><div align="center">Password</div></td>
	<td width="13%"><div align="center">Tools</a></div></td>
  </tr>
  <?php
  $rw=mysql_query("Select * from user_admin");
  $no=0;
  while($s=mysql_fetch_array($rw))
  {
  ?>
  <tr>
  <td><?php echo $no=$no+1;?></td>
	<td><?php echo $s['nama_admin']; ?></td>
    <td><?php echo $s['username']; ?></td>
    <td><?php echo $s['password']; ?></td>

    <td><div align="center"><a href="?page=useredit&id_admin=<?php echo sha1($s['username']); ?>">Edit</a> - <a href="?page=user&del=1&id_admin=<?php echo sha1($s['username']); ?>">Hapus</a></div></td>
  </tr>
  <?php
  }
  ?>
</table>

<?php
if(isset($_GET['act']))
 
{
	
	$rs=mysql_query("Insert into user_admin (`nama_admin`,`username`,`password`) values ('".$_POST['nama_admin']."','".$_POST['username']."','".md5($_POST['password'])."')") or die(mysql_error());
	if($rs)
	{
		echo "<script>window.location='?page=user'</script>";
	}
}
?>

<?php
if(isset($_GET['del']))
{
	$ids=$_GET['id_admin'];
	$ff=mysql_query("Delete from user_admin Where sha1(username)='".$ids."'");
	if($ff)
	{
		echo "<script>window.location='?page=user'</script>";
	}
}
?>
