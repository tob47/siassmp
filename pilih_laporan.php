<?php

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Laporan Penilaian</h1>
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
    <td valign="top">
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    		
            

      	<!--  start product-table ..................................................................................... -->
        
        <!--  start step-holder -->
		<div id="step-holder">
		  <div class="step-no">1</div>
			<div class="step-dark-left">Pilih Laporan</div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Laporan Nilai</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
        
        
        <form id="mainform" action="">
        <table width="51%" height="60" border="0" cellpadding="0" cellspacing="0" id="product-table">
        <tr bgcolor="#99CC33">
            <td width="9%" height="28" >Nomor</a>	</td>
            <td width="36%" >Nama Mata Pelajaran</a></td>
            <td width="32%" >Nama Guru</a></td>
            <td width="23%" >Kelas</a></td>
        </tr>
        
        
        <?php
		$view=mysql_query("select * from tbl_jadwal jadwal, data_guru guru where jadwal.id_guru=guru.id_guru order by jadwal.kelas asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><a href="?page=laporan_penilaian_admin&amp;id_guru=<?php echo $row['id_guru'];?>&amp;id_jadwal=<?php echo $row['id_jadwal'];?>&amp;kelas=<?php echo $row['kelas'];?>" style="text-decoration:underline" title="Pilih Mata Pelajaran"><?php echo $row['nama_pelajaran'];?></a></td>
            <td><?php echo $row['nama_guru'];?></td>
            <td><?php echo $row['kelas'];?></td>
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
