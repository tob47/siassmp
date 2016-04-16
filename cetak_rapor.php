<!--  start page-heading -->
<div id="page-heading">
    <h1>Cetak Rapor </h1>
<!--  start step-holder -->
		<div id="step-holder">
			
		</div>
		<!--  end step-holder -->
	

</div>
<!-- end page-heading -->    
        <form id="mainform" action="">
        <table width="38%" height="51" border="0" cellpadding="0" cellspacing="0" id="product-table">
        <tr bgcolor="#99CC33">
            <td width="15%" height="26">Nomor	</td>
            <td width="56%">Nama Kelas</td>
            <td width="29%">Jurusan</td>
        </tr>
        
        
        <?php
		$id_guru=$_SESSION['id_guru'];
		$view=mysql_query("select * from tbl_jwalikelas where id_guru='$id_guru' order by id_jwalikelas asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
			<td><a href="?page=cetak_nilai"><?php echo $row['nama_kelas'];?></a></td>  
			<td><?php echo $row['jurusan'];?></td>
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
