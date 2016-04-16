<?php

include "conn.php";

if(isset($_POST['submit'])){

	$id_jadwal=$_POST['id_jadwal'];
	$nama_pelajaran=$_POST['nama_pelajaran'];
	$kkm=$_POST['kkm'];
	$id_guru=$_POST['id_guru'];
	$kelas=$_POST['kelas'];
	
	$query=mysql_query("update tbl_jadwal set nama_pelajaran='$nama_pelajaran',kkm='$kkm',id_guru='$id_guru', kelas='$kelas' where id_jadwal='$id_jadwal'");
	
		?><script language="javascript">document.location.href="?page=jadwal_pengajaran&status=1";</script>
	<?php
	}
	?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Update Jadwal Pengajaran</h1>
</div>
<!-- end page-heading -->
			<?php
			$jadwal=mysql_fetch_array(mysql_query("select * from tbl_jadwal where id_jadwal='$_GET[id_jadwal]'"));
			$id_jadwal=$jadwal['id_jadwal'];
			$id_guru=$jadwal['id_guru'];
			$nama_pelajaran=$jadwal['nama_pelajaran'];
			$kkm=$jadwal['kkm'];
			$kelas=$jadwal['kelas'];
			?>

			<form id="mainform" action="?page=update_pelajaran" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Guru</th>
                      <td><select name="id_guru"  class="styledselect_form_1">
                      <option value="<?php echo $id_guru?>">- Pilih Guru Baru -</option>
                      <option value="<?php echo $id_guru?>">- Guru Tidak Dirubah -</option>
                      <?php
					  $guru=mysql_query("select * from data_guru order by nama_guru asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
                          <option value="<?php echo $row1['id_guru'];?>"><?php echo $row1['nama_guru'];?> [ <?php echo $row1['nip'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select> </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th valign="top">Pelajaran</th>
                     <td>
	       <?php // Koneksi 
						mysql_connect("localhost","root",""); 
						mysql_select_db("db_akademikk"); 
						
						$result = mysql_query("select * from setup_pelajaran"); 
						$jsArray = "var prdName = new Array();\n"; 
						
						echo '<select name="nama_pelajaran" class="inp-form" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">';  echo '<option>--Pilih Pelajaran--</option>'; 
						while ($row = mysql_fetch_array($result)) { 
						echo '<option value="' . $row['nama_pelajaran'] . '">' . $row['nama_pelajaran'] . '</option>'; 
						$jsArray .= "prdName['" . $row['nama_pelajaran'] . "'] = '" . addslashes($row['kkm']) . "';\n"; 
						} 
						echo '</select>'; ?> 
	     </label></td>
	   <td><input type="hidden" name="kkm" id="prd_name" class="inp-form" /></td>
		 <script type="text/javascript"> 
			<?php echo $jsArray; ?> 
			</script> 
			 <td><input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal;?>" /></td>
                    </tr>
                    
                    <tr>
                      <th valign="top">Kelas</th>
                      <td><select name="kelas"  class="styledselect_form_1">

                          <?php
						  $kelas=mysql_query("select * from setup_kelas order by nama_kelas asc");
						  while($row3=mysql_fetch_array($kelas)){
						  ?>
							  <option value="<?php echo $row3['nama_kelas'];?>"><?php echo $row3['nama_kelas'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select></td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th>&nbsp;</th>
                      <td valign="top"><input type="submit" name="submit" value="" class="form-submit" />
                          <input type="reset" value="" class="form-reset"  />                      </td>
                      <td></td>
                    </tr>
                  </table>
                <!-- end id-form  -->
              </td>
              <td><!--  start related-activities -->
              </td>
            </tr>
            <tr>
              <td><img src="../nilai_siswa/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
        	</table>
			</form>

			<p><em>*Tidak boleh 1 Kelas, 1 Pelajaran di ajarkan oleh 2 Guru atau lebih<br /></em> </p>           
			<p>&nbsp;</p>
			  
        
        
	<div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>
