 <form id="form1" name="form1" method="post"  action="laporan_siswa_perkelas.php" target="_blank">
	  <table width="540" height="151" border="0">
    <tr>
      <td height="43" colspan="4"><h2>Cetak Data Siswa </h2></td>
      </tr>
    <tr>
      <td height="50"><h3>Cetak Seluruh Data Siswa</h3></td>
      <td>:</td>
      <td><a href="laporan_ssiswa.php" target="_blank" class=""><img src="images/tombol/cooltext1864697365.png" /></a>    
      <td height="50">        </tr>
    <tr>
      <td width="229" height="50"><h3>Cetak Data Per Kelas</h3></td>
	  <td width="12">:&nbsp;&nbsp;</td>
      <td width="139"><select name="kelas" class="styledselect_form_1">
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
      <td width="142" height="50"><input name="cari" type="submit" id="cari" class="form-cetak"/>    </tr>
  </table>
</form>