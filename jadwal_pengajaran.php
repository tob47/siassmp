<?php

include "conn.php";

if(isset($_POST['submit'])){
	
	$nama_pelajaran=htmlentities($_POST['nama_pelajaran']);
	$kkm=htmlentities($_POST['kkm']);
	$id_guru=htmlentities($_POST['id_guru']);
	$kelas=htmlentities($_POST['kelas']);
		
	$query=mysql_query("insert into tbl_jadwal values('','$nama_pelajaran','$kkm','$id_guru','$kelas')");
	
	
	if($query){
		?><script language="javascript">document.location.href="?page=jadwal_pengajaran&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=jadwal_pengajaran&status=2";</script><?php
	}
	
	
}else{
	unset($_POST['submit']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Jadwal Pengajaran</h1>
</div>
<!-- end page-heading -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized">&nbsp;</th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized">&nbsp;</th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    		
            <?php
			if($_GET['status']=='1'){
			?>
			
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left"> Data berhasil disimpan :)</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			
			if($_GET['status']=='0'){
			?>

            <div id="message-red">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="red-left">Data di simpan</td>
                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>
    
    		<form action="?page=jadwal_pengajaran" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Guru</th>
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
						
						echo '<select name="nama_pelajaran" class="inp-form" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">'; echo '<option>--Pilih Pelajaran--</option>'; 
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
  
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th>&nbsp;</th>
                      <td valign="top"><input type="submit" name="submit" value="" class="form-submit" />
                          <input type="reset" value="" class="form-reset"  />
                      </td>
                      <td></td>
                    </tr>
                  </table>
                <!-- end id-form  -->
              </td>
              <td><!--  start related-activities -->
              </td>
            </tr>
            <tr>
              <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
        	</table>
			</form>

			<p><em>*Tidak boleh 1 Kelas, 1 Pelajaran di ajarkan oleh 2 Guru atau lebih<br /></em> </p>           
			<p>&nbsp;</p>
			  <!--  start product-table ..................................................................................... -->
        <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
        <tr bgcolor="#99CC33">
            <td width="10%"> <div align="center">No	</div></td>
            <td width="19%"> <div align="center">Nama Guru</div>
              </td>
            <td width="20%"> <div align="center">NIP</div>
              </td>
            <td width="19%"> <div align="center">Mata Pelajaran</div>
              </td>
            <td width="18%"> <div align="center">Kelas</div>
              </td>
            <td width="14%"> <div align="center">Aksi</div>
              </td>
        </tr>
        
        
        <?php
		$view=mysql_query("select * from tbl_jadwal jadwal, data_guru guru where jadwal.id_guru=guru.id_guru order by jadwal.id_jadwal asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td align="center"><?php echo $no=$no+1;?></td>
            <td><?php echo $row['nama_guru'];?></td>
            <td align="center"><?php echo $row['nip'];?></td>
            <td><?php echo $row['nama_pelajaran'];?>
              <div align="center"></div></td>
            <td><?php echo $row['kelas'];?></td>
            <td class="options-width">
            <a href="?page=update_pelajaran&id_jadwal=<?php echo $row['id_jadwal'];?>">Edit</a> - 
			<a href="?page=hapus_pelajaran&id_jadwal=<?php echo $row['id_jadwal'];?>">Hapus</a>          
            </td>
        </tr>
		<?php
		}
		?>
        </table>
        <!--  end product-table................................... --> 
        </form>
		
        
        
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
