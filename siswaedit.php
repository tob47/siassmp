<?php
ob_start();
if(isset($_GET['id_siswa']))
{
	$rs=mysql_query("Select * from data_siswa where sha1(id_siswa)='".$_GET['id_siswa']."'");
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
<form name="form1" method="post" action="?page=siswaedit&id_siswa=<?php echo $_GET['id_siswa']; ?>&edit=1">
<center>
   <table width="772" height="1208" border="0">
	   <tr>
	     <td height="42" colspan="3"><h2 align="center">Edit Data Siswa </h2></td>
     </tr>
	   <tr>
		   <td height="30">Data Umum </td>
		   <td></td>
		   <td></td>
	   </tr>
    <tr>
      <td width="246" height="37">Nama Peserta Didik (Lengkap) </td>
      <td width="20">:</td>
      <td width="492">
        <input name="nama_siswa" type="text" class="inp-form" id="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" maxlength="30" /></td>
    </tr>
    <tr>
      <td height="40">Nomor Induk </td>
      <td>:</td>
      <td><input name="nis" class="inp-form" type="text" id="nis" value="<?php echo $row['nis']; ?>" maxlength="8" /></td>
    </tr>
    <tr>
      <td height="37">NISN</td>
      <td>:</td>
      <td><input name="nisn" class="inp-form" type="text" id="nisn" value="<?php echo $row['nisn']; ?>" maxlength="10" /></td>
    </tr>
    <tr>
      <td height="40">Tempat Lahir </td>
      <td>:</td>
      <td><input name="kota" class="inp-form" type="text" id="kota" value="<?php echo $row['kota']; ?>" /></td>
    </tr>
    <tr>
      <td height="41">Tanggal Lahir</td>
      <td>:</td>
	  <td><label class="styledselect_form_1">
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
				 <option value="juli">Juli</option>
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
    <tr height="30">
      <td height="38">Jenis Kelamin </td>
      <td>:</td>
      <td>
      <select name="kelamin" id="kelamin" class="styledselect_form_1">
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
        </select></td>
    </tr>
    <tr>
      <td height="41">Agama</td>
      <td>:</td>
      <td>
        <select name="agama" class="styledselect_form_1" >
          <option value="islam">Islam</option>
          <option value="budha">Budha</option>
          <option value="hindu">Hindu</option>
          <option value="katolik">Katolik</option>
          <option value="protestan">Protestan</option>
        </select>
     </td>
    </tr>
    <tr>
      <td height="35">Status dalam keluarga </td>
      <td>:</td>
      <td><input name="status"  class="inp-form" type="text" id="status" maxlength="20" value="<?php echo $row['status']; ?>" /></td>
    </tr>
    <tr>
      <td height="44">Anak ke </td>
      <td>:</td>
      <td><input name="anakke"  class="inp-form" type="text" id="anakke" maxlength="10" value="<?php echo $row['anakke']; ?>" /></td>
    </tr>
    <tr>
      <td height="45">Alamat Peserta Didik </td>
      <td>:</td>
      <td>
        <input name="alamat_siswa" class="inp-form" type="text" id="alamat_siswa" maxlength="70" value="<?php echo $row['alamat_siswa']; ?>" />Telp./Hp<input name="telpon_siswa" class="inp-form" type="text" id="telpon_siswa" maxlength="13" value="<?php echo $row['telpon_siswa']; ?>" /></td>
    </tr>
    <tr>
      <td height="36">Sekolah Asal </td>
      <td>:</td>
      <td>
        <input name="sekolahasal" class="inp-form" type="text" id="sekolahasal" maxlength="20" value="<?php echo $row['sekolahasal']; ?>" />
      </td>
    </tr>
    <tr>
      <td height="30">Diterima di sekolah ini </td>
      <td>&nbsp;</td>
      <td><label></label></td>
    </tr>
    <tr>
      <td height="41">&nbsp;&nbsp;&nbsp;Di Kelas </td>
      <td>:</td>
      <td><label>
	  <select name="kelas" class="styledselect_form_1">
			<option selected>--- Pilih Kelas ---</option>
			<?php
			include('conn.php');
			$sql = mysql_query("SELECT * FROM setup_kelas ORDER BY nama_kelas ASC");
			
			if(mysql_num_rows($sql) != 0){
				while($row = mysql_fetch_assoc($sql)){
					echo '<option>'.$row['nama_kelas'].'</option>';
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
if(isset($_GET['id_siswa']))
{
	$rs=mysql_query("Select * from data_siswa where sha1(id_siswa)='".$_GET['id_siswa']."'");
	$row=mysql_fetch_array($rs);
?>
    <tr>
     <td>&nbsp;&nbsp;&nbsp;Pada Tanggal</td>
      <td height="39">:</td>
      <td><label class="styledselect_form_1">
        <select name="pd_tgl" id="pd_tgl">
		<?php
		for ($x=1;$x<=31;$x++) {
		echo("<option value =$x>$x</option>");
		}?>
        </select>
        <select name="pd_bln" id="pd_bln">
				 <option value="januari"> Januari</option>
				 <option value="februari"> Februari</option>
				 <option value="maret">Maret</option>
				 <option value="april"> April </option>
				 <option value="mei">Mei</option>
				 <option value="juni">Juni</option>
				 <option value="juli">Juli</option>
				 <option value="agustus">Agustus</option>
				 <option value="september"> September </option>
				 <option value="oktober">Oktober </option>
				 <option value="november">November</option>
				 <option value="desember">Desember</option>
        </select>
        <select name="pd_thn" id="pd_thn">
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
      <td height="30">Nama Orang Tua </td>
      <td>&nbsp;</td>
      <td><label></label></td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td>:</td>
      <td>
        <input name="ayah" class="inp-form" type="text" id="ayah" maxlength="30" value="<?php echo $row['ayah']; ?>"/>
      </td>
    </tr>
    <tr>
      <td height="46">&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td>:</td>
      <td><input name="ibu" type="text" class="inp-form" id="ibu" maxlength="30" value="<?php echo $row['ibu']; ?>" /></td>
    </tr>
    <tr>
      <td height="35">Alamat Orang Tua </td>
      <td>:</td>
      <td>
        <input name="alamatortu" type="text" class="inp-form" id="alamatortu" maxlength="40" value="<?php echo $row['alamatortu']; ?>" />
        Telp./Hp
        <input name="hportu" type="text" id="hportu" class="inp-form" maxlength="13" value="<?php echo $row['hportu']; ?>"/>
      </td>
    </tr>
    <tr>
      <td height="30">Pekerjaan Orang Tua </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="38">&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td>:</td>
      <td>
        <input name="pekerjaanayah" class="inp-form" type="text" id="pekerjaanayah" maxlength="20" value="<?php echo $row['pekerjaanayah']; ?>"/>
      </td>
    </tr>
    <tr>
      <td height="37">&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td>:</td>
      <td><input name="pekerjaanibu" class="inp-form" type="text" id="pekerjaanibu" maxlength="20" value="<?php echo $row['pekerjaanibu']; ?>"/></td>
    </tr>
    <tr>
      <td height="38">Nama Wali </td>
      <td>:</td>
      <td>
        <input name="wali" type="text" class="inp-form" id="wali" maxlength="30" value="<?php echo $row['wali']; ?>"/>
      </td>
    </tr>
    <tr>
      <td height="39">Alamat Wali </td>
      <td>:</td>
      <td><input name="alamatwali" type="text" class="inp-form" id="alamatwali" maxlength="40" value="<?php echo $row['alamatwali']; ?>"/>
        Telp./Hp
      <input name="hpwali" type="text" id="hpwali" class="inp-form" maxlength="13" value="<?php echo $row['hpwali']; ?>"/></td>
    </tr>
    <tr>
      <td height="36">Pekerjaan Wali </td>
      <td>:</td>
      <td><input name="pekerjaanwali" type="text" class="inp-form" id="pekerjaanwali" maxlength="20" value="<?php echo $row['pekerjaanwali']; ?>"/></td>
    </tr>
    <tr>
      <td height="30">Photo </td>
      <td>:</td>
      <td>
        <input type="file" name="gambar" id="gambar" class="inp-form" />
      </td>
    </tr>
	   <tr>
		   <td height="30">Akses Sistem </td>
		   <td>:</td>
		   <td></td>
	   </tr>
	   <tr>
		   <td height="37">Username </td>
		   <td>:</td>
		   <td><input name="username" type="text" class="inp-form" id="usename" maxlength="12" value="<?php echo $row['username']; ?>"/></td>
	   </tr>
	   <tr>
		   <td height="38">Password </td>
		   <td>:</td>
		   <td><input name="password" type="password" class="inp-form" id="pass" maxlength="10" value="<?php echo $row['password']; ?>"/></td>
	   </tr>
	<tr>
	<td> &nbsp; &nbsp; &nbsp;</td>
	<td>&nbsp;</td>
	<td> <input type="submit" class="form-submit" name="button" id="button">&nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=siswatampil'"> </td>
	</tr>
  </table>
  </center>
</form>
<?php

ob_end_flush();
}else{
	echo "<script>window.location='?page=siswatampil'</script>";
}
?>

<?php
if(isset($_GET['edit']))

{
	$rs=mysql_query("Update data_siswa SET nis='".$_POST['nis']."',nama_siswa='".$_POST['nama_siswa']."',nisn='".$_POST['nisn']."',kota='".$_POST['kota']."',tgl='".$_POST['tgl']."',bln='".$_POST['bln']."',thn='".$_POST['thn']."',kelamin='".$_POST['kelamin']."',agama='".$_POST['agama']."',status='".$_POST['status']."',anakke='".$_POST['anakke']."',alamat_siswa='".$_POST['alamat_siswa']."',telpon_siswa='".$_POST['telpon_siswa']."',sekolahasal='".$_POST['sekolahasal']."',kelas='".$_POST['kelas']."',pd_tgl='".$_POST['pd_tgl']."',pd_bln='".$_POST['pd_bln']."',pd_thn='".$_POST['pd_thn']."',ayah='".$_POST['ayah']."',ibu='".$_POST['ibu']."',alamatortu='".$_POST['alamatortu']."',hportu='".$_POST['hportu']."',pekerjaanayah='".$_POST['pekerjaanayah']."',pekerjaanibu='".$_POST['pekerjaanibu']."',wali='".$_POST['wali']."',alamatwali='".$_POST['alamatwali']."',hpwali='".$_POST['hpwali']."',pekerjaanwali='".$_POST['pekerjaanwali']."',username='".$_POST['username']."',password='".md5($_POST['password'])."' Where sha1(id_siswa)='".$_GET['id_siswa']."'");
	if($rs)
	{
		echo "<script>window.location='?page=siswatampil'</script>";
	}
}
?>
