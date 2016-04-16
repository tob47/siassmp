<?php
ob_start();
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
<form name="formuser" method="post" action="?page=gurusimpan&act=1">
<center>
 <table width="544" height="760" border="0">
	 <tr>
	   <td height="42" colspan="3"><h1 align="center">Input Data Guru </h1></td>
    </tr>
	 <tr>
		 <td height="42" colspan="3">Data Umum</td>
	 </tr>
		<tr>
      <td width="254" height="34">NIP</td>
      <td width="11">:</td>
      <td width="265"><input name="nip" type="text" id="nip" maxlength="20" class="inp-form" /></td>
    </tr>
    <tr>
      <td height="42">Nama Guru </td>
      <td>:</td>
      <td><input name="nama_guru" type="text" id="nama_guru" maxlength="40" class="inp-form" /></td>
    </tr>
    <tr>
      <td height="39">Tempat Lahir </td>
      <td>:</td>
      <td><input name="kota" type="text" id="kota" maxlength="30" class="inp-form" /></td>
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
      <td width="11">:</td>
      <td width="265" height="37"><select name="kelamin" id="kelamin"  class="styledselect_form_1" >
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
      </select></td>
    </tr>
    <tr>
      <td height="33">Agama</td>
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
      <td height="52">Alamat</td>
      <td>:</td>
      <td><input name="alamat_guru" id="alamat_guru" class="inp-form"  /></td>
    </tr>
       <tr>
      <td height="41">Terhitung Mulai Tanggal</td>
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
      <td height="36">Pendidikan </td>
      <td>:</td>
      <td><input name="pendidikan" type="text" id="pendidikan" maxlength="30" class="inp-form" />
     </td>
    </tr>
    <tr>
      <td height="41">Golongan </td>
      <td>:</td>
      <td>
       <select name="golongan" class="styledselect_form_1">
			<option selected>--- Pilih Golongan ---</option>
			<?php
			include('conn.php');
			$sql = mysql_query("SELECT * FROM pegawai ORDER BY namapegawai ASC");
			if(mysql_num_rows($sql) != 0){
				while($row = mysql_fetch_assoc($sql)){
					echo '<option>'.$row['namapegawai'].'</option>';
				}
			}
			?>
		</select></td>
    </tr>
    <tr>
      <td height="28">Jabatan </td>
      <td>:</td>
      <td><label>
        <input name="jabatan" type="text" id="jabatan" maxlength="30" class="inp-form" />
      </label></td>
    </tr>
      <tr><td height="30">Photo </td>
        <td>:</td>
        <td><label>
        <input type="file" name="gambar" id="gambar" />
      </label></td>
    </tr>
	<tr>
		 <td height="45" colspan="3">Akses Sistem</td>
    </tr>
	 <tr>
		 <td height="38">Username </td>
		 <td>:</td>
		 <td><input name="username" type="text" id="username" maxlength="12" class="inp-form" /></td>
	 </tr>
    <tr>
      <td height="41">Password</td>
      <td>:</td>
      <td><input name="password" type="password" id="password" maxlength="10" class="inp-form" /></td>
    </tr>
	<tr>
      <td height="30"></td>
      <td>&nbsp;</td>
   </tr>
	<tr>
	<td></td>
	<td>&nbsp;</td>
	<td><input type="submit" class="form-submit" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="form-reset" name="reset" id="reset" value="Reset">&nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=gurutampil'"></td>
	</tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
?>