<!--  start page-heading -->
<div id="page-heading">
    <h1>Cetak Rapor </h1>

</div>
<!-- end page-heading -->    
       <form id="form1" name="form1" method="post"  action="laporan_siswa_perkelas.php" target="_blank">
	  <table width="540" height="54" border="0">
    <tr>
      <td width="193" height="50"><h2>&nbsp;&nbsp;&nbsp;&nbsp;Cetak Rapor </h2></td>
	  <td width="22">:&nbsp;&nbsp;</td>
      <td width="165"><select name="id_siswa"  class="styledselect_form_1">
	  <option>--Pilih Siswa--</option>
                      
                      <?php
					  $guru=mysql_query("select * from data_siswa order by nama_siswa asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
                          <option value="<?php echo $row1['id_siswa'];?>"><?php echo $row1['nama_siswa'];?> [ <?php echo $row1['kelas'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select>
      <td width="142" height="50"><input name="cari" type="submit" id="cari" class="form-cetak"/>    </tr>
  </table>
</form>
