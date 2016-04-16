<?php
ob_start();
if(isset($_GET['id_guru']))
{
	$rs=mysql_query("Select * from data_guru where sha1(id_guru)='".$_GET['id_guru']."'");
	$row=mysql_fetch_array($rs);
?>
<link rel="stylesheet" href="js/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.js" ></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function() {
		$( "#input" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
		});
	</script>
<form name="form1" method="post" action="?page=guruedit&id_guru=<?php echo $_GET['id_guru']; ?>&edit=1">
<center>
   <table width="524" height="750" border="0" align="center">
	   <tr>
	     <td height="38" colspan="3"><h2 align="center">Edit Data Guru </h2></td>
     </tr>
	   <tr>
		   <td height="29" colspan="3"><div align="left">Data Umum </div></td>
	   </tr>
		<tr>
      <td width="275" height="37">NIP</td>
      <td width="13">:</td>
      <td width="276"><label>
        <input name="nip" type="text" class="inp-form" id="nip" value="<?php echo $row['nip']; ?>" maxlength="20" />
      </label></td>
    </tr>
    <tr>
      <td height="37">Nama Guru </td>
      <td>:</td>
      <td><input name="nama_guru" type="text" class="inp-form" id="nama_guru" value="<?php echo $row['nama_guru']; ?>" maxlength="30" /></td>
    </tr>
    <tr>
      <td height="36">Tempat Lahir</td>
      <td>:</td>
      <td><input name="kota" type="text" class="inp-form" id="kota" value="<?php echo $row['kota']; ?>" maxlength="10" /></td>
    </tr>
    <tr>
      <td height="35">Tanggal Lahir</td>
      <td>:</td>
      <td>
        <label class="styledselect_form_1">
        <select name="tgl" id="tgl">
		<?php
		for ($x=1;$x<=31;$x++) {
		echo("<option value =$x>$x</option>");
		}?>
        </select>
        <select name="bln" id="bln">
				 <option value="januari"> Januari</option>
				 <option value="februari"> Februari</option>
				 <option value="maret">Maret</option>
				 <option value="april"> April </option>
				 <option value="mei">Mei</option>
				 <option value="juni">Juni</option>
				 <option value="juli">Juni</option>
				 <option value="agustus">Agustus</option>
				 <option value="september"> September </option>
				 <option value="oktober">Oktober </option>
				 <option value="november">November</option>
				 <option value="desember">Desember</option>
        </select>
        <select name="thn" id="thn">
		<?php
			 $a=Date("Y");
			 $b=$a-0;
			 $c=$a-40;
			 for ($x=$c;$x<=$b;$x++) {
			echo("<option value=$x>$x</option>");
} ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td> Jenis Kelamin</td>
      <td height="39"> : </td>
      <td width="276">
      <select name="kelamin" id="kelamin" class="styledselect_form_1">
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
        </select>      </td>
    </tr>
    <tr>
      <td height="36">Agama</td>
      <td>:</td>
      <td><label>
        <select name="agama" class="styledselect_form_1">
          <option value="islam">Islam</option>
          <option value="budha">Budha</option>
          <option value="hindu">Hindu</option>
          <option value="katolik">Katolik</option>
          <option value="protestan">Protestan</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="35">Alamat </td>
      <td>:</td>
      <td><input name="alamat_guru" type="text" class="inp-form" id="alamat_guru" maxlength="70" value="<?php echo $row['alamat_guru']; ?>" /></td>
    </tr>
    <tr>
      <td height="36">Terhitung Mulai Tanggal </td>
      <td>:</td>
      <td><label class="styledselect_form_1">
        <select name="tm_tanggal" id="tm_tanggal">
		<?php
		for ($x=1;$x<=31;$x++) {
		echo("<option value =$x>$x</option>");
		}?>
        </select>
        <select name="tm_bulan" id="tm_bulan">
				 <option value="januari"> Januari</option>
				 <option value="februari"> Februari</option>
				 <option value="maret">Maret</option>
				 <option value="april"> April </option>
				 <option value="mei">Mei</option>
				 <option value="juni">Juni</option>
				 <option value="juli">Juni</option>
				 <option value="agustus">Agustus</option>
				 <option value="september"> September </option>
				 <option value="oktober">Oktober </option>
				 <option value="november">November</option>
				 <option value="desember">Desember</option>
        </select>
        <select name="tm_tahun" id="tm_tahun">
		<?php
			 $a=Date("Y");
			 $b=$a-0;
			 $c=$a-40;
			 for ($x=$c;$x<=$b;$x++) {
			echo("<option value=$x>$x</option>");
} ?>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="35">Pendidikan </td>
      <td>:</td>
      <td>
        <input name="pendidikan" type="text" class="inp-form" id="pendidikan" maxlength="70" value="<?php echo $row['pendidikan']; ?>" /></td>
    </tr>
    <tr>
      <td height="39">Golongan </td>
      <td>:</td>
      <td><label>
        <select name="golongan" class="styledselect_form_1">
			<option selected>--- Pilih Golongan ---</option>
			<?php
			$sql = mysql_query("SELECT * FROM pegawai ORDER BY namapegawai ASC");
			if(mysql_num_rows($sql) != 0){
				while($row = mysql_fetch_assoc($sql)){
					echo '<option>'.$row['namapegawai'].'</option>';
				}
			}
			?>
		</select>
      </label></td>
    </tr>
    
	<?php

ob_end_flush();
}
?>
<?php
ob_start();
if(isset($_GET['id_guru']))
{
	$rs=mysql_query("Select * from data_guru where sha1(id_guru)='".$_GET['id_guru']."'");
	$row=mysql_fetch_array($rs);
?>
	<tr>
      <td height="36">Jabatan </td>
      <td>:</td>
      <td><label>
		 <input name="jabatan" type="text" class="inp-form" id="jabatan" maxlength="6" value="<?php echo $row['jabatan']; ?>"/>
		</label></td>
    </tr>
    <tr>
      <td height="45">Photo </td>
      <td>:</td>
      <td><label>
        <input type="file" name="gambar" id="gambar" class="inp-form" />
      </label></td>
    </tr>
	   <tr>
		   <td height="39" colspan="3"><div align="left">Akses Sistem</div></td>
	   </tr>
	   <tr>
		   <td height="42">Username </td>
		   <td>:</td>
		   <td><input name="username" type="text" id="username" class="inp-form" maxlength="12" value="<?php echo $row['username']; ?>"  /></td>
	   </tr>
	   <tr>
		   <td height="38">Password</td>
		   <td>:</td>
		   <td><input name="password" type="password" id="password" maxlength="10" class="inp-form" value="<?php echo $row['password']; ?>" /></td>
	   </tr>
	<tr>
	<td height="48"> &nbsp; &nbsp; &nbsp;</td>
	<td>&nbsp;</td>
	<td> <input type="submit" class="form-submit" name="button" id="button" value="Ubah">&nbsp; &nbsp; &nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=gurutampil'"></td>
	</tr>
  </table>
  </center>
</form>
<?php

ob_end_flush();
}else{
	echo "<script>window.location='?page=gurutampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))

{
	$move=move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$gambar);
	$rs=mysql_query("Update data_guru SET nip='".$_POST['nip']."',nama_guru='".$_POST['nama_guru']."',kota='".$_POST['kota']."',tgl='".$_POST['tgl']."',bln='".$_POST['bln']."',thn='".$_POST['thn']."',kelamin='".$_POST['kelamin']."',agama='".$_POST['agama']."',alamat_guru='".$_POST['alamat_guru']."',tm_tanggal='".$_POST['tm_tanggal']."',tm_bulan='".$_POST['tm_bulan']."',tm_tahun='".$_POST['tm_tahun']."',pendidikan='".$_POST['pendidikan']."',golongan='".$_POST['golongan']."',jabatan='".$_POST['jabatan']."',username='".$_POST['username']."',password='".md5($_POST['password'])."' Where sha1(id_guru)='".$_GET['id_guru']."'");
	if($rs)
	{
		echo "<script>window.location='?page=gurutampil'</script>";
	}
}
?>
