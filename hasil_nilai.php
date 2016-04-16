<?php

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Hasil Nilai</h1>
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

      	<!--  start product-table ..................................................................................... -->
	
    	<?php
		
		$id_siswa=$_SESSION['id_siswa'];
		$siswa=mysql_fetch_array(mysql_query("select nama_siswa, nis, kelas from data_siswa where id_siswa= '$id_siswa'"));
		
		$nama_siswa=$siswa['nama_siswa'];
		$nis=$siswa['nis'];
		$kelas=$siswa['kelas'];
		
		?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Nama Siswa</th>
          <td><input type="text" class="inp-form" name="nama_siswa" value="<?php echo $nama_siswa;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">NIS</th>
          <td><input type="text" class="inp-form" name="nis" value="<?php echo $nis;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Kelas</th>
          <td><input type="text" class="inp-form" name="kelas" value="<?php echo $kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>
      <br />
      
        <form id="mainform" action="?page=input_nilai_siswa" method="post">
        <table border="0" width="80%" cellpadding="0" cellspacing="0" id="product-table">
       <tr bgcolor="#99CC33">
            <td width="4%">Nomor	</td>
            <td width="12%">Nama Pelajaran</td>
            <td width="4%">Nilai UH1</td>
            <td width="4%">Nilai UH2</td>
            <td width="4%">Nilai UH3</td>
            <td width="4%">Nilai UH4</td>
            <td width="4%" >Nilai UH5</td>
            <td width="4%" >Rata UH</td>
			 <td width="4%">Tugas 1</td>
            <td width="4%" >Tugas 2</td>
            <td width="4%" >Tugas 3</td>
            <td width="4%" >Tugas 4</td>
            <td width="4%" >Rata Tugas</td>
			 <td width="4%">Nilai Harian</td>
            <td width="4%" >Nilai UAS</td>
            <td width="4%" >NA Rapor</td>
            <td width="4%" >KKM</td>
            <td width="7%" >Ket.</td>
        </tr>
        
        <?php
		$view=mysql_query("SELECT * FROM tbl_nilai nilai, tbl_jadwal jadwal WHERE nilai.id_siswa='$id_siswa' and nilai.id_jadwal=jadwal.id_jadwal order by jadwal.nama_pelajaran asc");
		
	
		while($row=mysql_fetch_array($view)){
			$c=$c+1;
			?>
			<tr>
				<td><?php echo $c;?></td>
				<td><?php echo $row['nama_pelajaran'];?></td>
                <td><?php echo $row['nilai_uh1']; ?></td>
                <td><?php echo $row['nilai_uh2']; ?></td>
                <td><?php echo $row['nilai_uh3']; ?></td>
                <td><?php echo $row['nilai_uh4']; ?></td>
				<td><?php echo $row['nilai_uh4']; ?></td>				
                <td><?php echo $row['rata_uh']; ?></td>
				 <td><?php echo $row['nilai_tugas1']; ?></td>
				 <td><?php echo $row['nilai_tugas2']; ?></td>
				 <td><?php echo $row['nilai_tugas3']; ?></td>
				 <td><?php echo $row['nilai_tugas4']; ?></td>
				 <td><?php echo $row['rata_tugas']; ?></td>
				 <td><?php echo $row['nilai_harian']; ?></td>
				 <td><?php echo $row['nilai_uas']; ?></td>
				 <td><?php echo $row['nilai_rapor']; ?></td>
				 <td><?php echo $row['kkm']; ?></td>
				 <td><?php echo $row['ket']; ?></td>
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
