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

<form name="formuser" method="post" action="?page=siswasimpan&act=1">
<center>
 <table width="716" height="1250" border="0">
	 <tr>
	   <td height="42" colspan="3"><h1 align="center">Input Data Siswa </h1></td>
    </tr>
	 <tr>
	   <td>Data Umum</td>
	   <td height="30">&nbsp;</td>
		 <td></td>
	 </tr>
    <tr>
      <td width="271">Nama Peserta Didik (Lengkap) </td>
      <td width="11" height="37">:</td>
      <td width="420"><label>
        <input name="nama_siswa" type="text" id="nama_siswa" class="inp-form" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <td>Nomor Induk </td>
      <td height="42">:</td>
      <td><input name="nis" type="text" id="nis" maxlength="8" class="inp-form" /></td>
    </tr>
    <tr>
      <td>NISN</td>
      <td height="40">:</td>
      <td><input name="nisn" type="text" id="nisn" maxlength="10" class="inp-form" /></td>
    </tr>
    <tr>
      <td>Tempat Lahir </td>
      <td height="41">:</td>
      <td><input name="kota" type="text" id="kota" class="inp-form" /></td>
    </tr>
    <tr>
      <td> Tanggal Lahir</td>
      <td height="41">:</td>
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
      <td>Jenis Kelamin </td>
      <td height="37">:</td>
      <td>
      <select name="kelamin" id="kelamin" class="styledselect_form_1">
        <option value="laki-laki">Laki - laki</option>
        <option value="perempuan">Perempuan</option>
        </select>      </td>
    </tr>
    <tr>
      <td>Agama</td>
      <td height="37">:</td>
      <td><label>
        <select name="agama" class="styledselect_form_1" >
          <option value="islam">Islam</option>
          <option value="budha">Budha</option>
          <option value="hindu">Hindu</option>
          <option value="katolik">Katolik</option>
          <option value="protestan">Protestan</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Status dalam keluarga </td>
      <td height="38">:</td>
      <td><input name="status" type="text" id="status" maxlength="20" class="inp-form" /></td>
    </tr>
    <tr>
      <td>Anak ke </td>
      <td height="38">:</td>
      <td><input name="anakke" type="text" id="anakke" maxlength="10" class="inp-form" /></td>
    </tr>
    <tr>
      <td>Alamat Peserta Didik </td>
      <td height="59">:</td>
      <td><label>
        <textarea name="alamat_siswa" id="alamat_siswa" class=""></textarea>
        Telp./Hp
        <input name="telpon_siswa" type="text" id="telpon_siswa" maxlength="13" class="inp-form" /></label></td>
    </tr>
    <tr>
      <td>Sekolah Asal </td>
      <td height="38">:</td>
      <td><label>
        <input name="sekolahasal" type="text" id="sekolahasal" maxlength="20" class="inp-form" />
      </label></td>
    </tr>
    <tr>
      <td>Diterima di sekolah ini </td>
      <td height="30"></td>
      <td><label></label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Di Kelas </td>
      <td height="39">:</td>
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
      <td>Nama Orang Tua </td>
      <td height="30">:</td>
      <td><label></label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td height="42">:</td>
      <td><label>
        <input name="ayah" type="text" id="ayah" maxlength="30" class="inp-form" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td height="39">:</td>
      <td><input name="ibu" type="text" id="ibu" maxlength="30" class="inp-form" /></td>
    </tr>
    <tr>
      <td>Alamat Orang Tua </td>
      <td height="48">:</td>
      <td><label>
        <textarea name="alamatortu" id="alamatortu"></textarea>
        Telp./Hp
        <input name="hportu" type="text" id="hportu" maxlength="13" class="inp-form" />
      </label></td>
    </tr>
    <tr>
      <td>Pekerjaan Orang Tua </td>
      <td height="35">:</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;a. Ayah </td>
      <td height="40">:</td>
      <td><input name="pekerjaanayah" type="text" id="pekerjaanayah" maxlength="20" class="inp-form" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;b. Ibu </td>
      <td height="41">:</td>
      <td><input name="pekerjaanibu" type="text" id="pekerjaanibu" maxlength="20" class="inp-form"/></td>
    </tr>
    <tr>
      <td>Nama Wali </td>
      <td height="39">:</td>
      <td><input name="wali" type="text" id="wali" maxlength="30" class="inp-form"/>
      </td>
    </tr>
    <tr>
      <td>Alamat Wali </td>
      <td height="50">:</td>
      <td>
        <textarea name="alamatwali" id="alamatwali"></textarea>
        Telp./Hp
      <input name="hpwali" type="text" id="hpwali" maxlength="13" class="inp-form" /></td></tr>
    <tr>
      <td>Pekerjaan Wali </td>
      <td height="36">:</td>
      <td><input name="pekerjaanwali" type="text" id="pekerjaanwali" maxlength="20" class="inp-form" /></td>
    </tr>
	 <tr>
	   <td>Photo </td>
	   <td height="37">:</td>
		 <td><label>
			 <input type="file" name="gambar" id="gambar" class="inp-form"/>
		 </label></td>
	 </tr>
	 <tr>
	   <td>Akses Sistem</td>
	   <td height="30">&nbsp;</td>
		 <td></td>
	 </tr>
	 <tr>
	   <td>Username </td>
	   <td height="36">:</td>
		 <td><input name="username" type="text" id="username" maxlength="12" class="inp-form" /></td>
	 </tr>
    <tr>
      <td>Password</td>
      <td height="40">:</td>
      <td><input name="password" type="password" id="password" maxlength="10" class="inp-form" /></td>
    </tr>
  <tr>
    <td></td>
    <td></td>
  <td><input type="submit" class="form-submit" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="form-reset" name="reset" id="reset" value="Reset"> &nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=siswatampil'"></td>
  </tr>
  </table>
  </center>
</form>
<?php
ob_end_flush();
?>