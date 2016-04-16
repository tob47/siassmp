<?php

include "conn.php";

if(isset($_POST['submit'])){

	$id_jwalikelas=$_POST['id_jwalikelas'];
	$nama_kelas=$_POST['nama_kelas'];
	$jurusan=$_POST['jurusan'];
	$id_guru=$_POST['id_guru'];
	$nip=$_POST['nip'];
	
	$query=mysql_query("update tbl_jwalikelas set nama_kelas='$nama_kelas',jurusan='$jurusan',id_guru='$id_guru', nip='$nip' where id_jwalikelas='$id_jwalikelas'");
	
		?><script language="javascript">document.location.href="?page=jadwal_walikelas&status=1";</script>
	<?php
	}
	?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Update Jadwal Pengajaran</h1>
</div>
<!-- end page-heading -->
			<?php
			$jwalikelas=mysql_fetch_array(mysql_query("select * from tbl_jwalikelas where id_jwalikelas='$_GET[id_jwalikelas]'"));
			$id_jwalikelas=$jwalikelas['id_jwalikelas'];
			$id_guru=$jwalikelas['id_guru'];
			$nama_kelas=$jjwalikelas['nama_kelas'];
			$jurusan=$jwalikelas['jurusan'];
			$nip=$jwalikelas['nip'];
			?>

			<form id="mainform" action="?page=update_jwalikelas" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Kelas</th>
                     <td>
	      <?php // Koneksi 
						mysql_connect("localhost","root",""); 
						mysql_select_db("db_akademikk"); 
						
						$result = mysql_query("select * from setup_kelas"); 
						$jsArray = "var prdName = new Array();\n"; 
						
						echo '<select name="nama_kelas" class="inp-form" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">'; echo '<option>--Pilih Kelas--</option>'; 
						while ($row = mysql_fetch_array($result)) { 
						echo '<option value="' . $row['nama_kelas'] . '">' . $row['nama_kelas'] . '</option>'; 
						$jsArray .= "prdName['" . $row['nama_kelas'] . "'] = '" . addslashes($row['jurusan']) . "';\n"; 
						} 
						echo '</select>'; ?> 
	     </label></td>
                      <td><input type="hidden" name="jurusan" id="prd_name" class="inp-form" /></td>
		 <script type="text/javascript"> 
			<?php echo $jsArray; ?> 
			</script>   <td><input type="hidden" name="id_jwalikelas" value="<?php echo $id_jwalikelas;?>" /></td>     
                    </tr>
                    
                    <tr>
                      <th valign="top">Wali Kelas</th>
	       <td><select name="id_guru"  class="styledselect_form_1">
                      
                      <?php
					  $guru=mysql_query("select * from data_guru order by nama_guru asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
                          <option value="<?php echo $row1['id_guru'];?>"><?php echo $row1['nama_guru'];?> [ <?php echo $row1['nip'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select>
                      </td>
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

			<p><em>*Tidak boleh 1 Kelas,di Asuh oleh 2 Guru atau lebih<br /></em> </p>           
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
