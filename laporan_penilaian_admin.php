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
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
      	<!--  start product-table ..................................................................................... -->
        <!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no-off">1</div>
			<div class="step-light-left">Pilih Laporan</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no">2</div>
			<div class="step-dark-left">Laporan Nilai</div>
			<div class="step-dark-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
    	<?php
		
		$id_guru=$_GET['id_guru'];
		$kelas=$_GET['kelas'];
		$id_jadwal=$_GET['id_jadwal'];
		
		$guru=mysql_fetch_array(mysql_query("select * from data_guru where id_guru='$id_guru'"));
		$kelass=mysql_fetch_array(mysql_query("select * from tbl_jadwal where kelas='$kelas'"));
		$pelajaran=mysql_fetch_array(mysql_query("select * from tbl_jadwal where id_jadwal='$id_jadwal'"));
		
		$nama_guru=$guru['nama_guru'];
		$nama_kelas=$kelass['kelas'];
		$nama_pelajaran=$pelajaran['nama_pelajaran'];
		
		?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Nama Guru</th>
          <td><input type="text" class="inp-form" name="nama_guru" value="<?php echo $nama_guru;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">Pelajaran</th>
          <td><input type="text" class="inp-form" name="nama_pelajaran" value="<?php echo $nama_pelajaran;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Kelas</th>
          <td><input type="text" class="inp-form" name="kelas" value="<?php echo $nama_kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>      
      <br />
      
        <table border="0" width="105%" cellpadding="0" cellspacing="0" id="product-table">
      <tr bgcolor="#99CC33">
           <td width="4%">Nomor	</td>
            <td width="12%">Nama Siswa</td>
            <td width="11%">NIS</td>
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
		$view=mysql_query("SELECT * FROM tbl_nilai nilai, data_siswa siswa WHERE nilai.id_siswa=siswa.id_siswa and nilai.id_guru='$id_guru' and nilai.kelas='$kelas' and nilai.id_jadwal='$id_jadwal' order by siswa.nama_siswa asc");
		
		$i = 1;
		while($row=mysql_fetch_array($view)){
			?>
			<input type="hidden" name="id_guru" value="<?php echo $id_guru;?>" />
			<input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal;?>" />	
			<input type="hidden" name="kelas" value="<?php echo $kelas;?>" />
			<?php echo "<input type='hidden' name='id_siswa".$i."' value='".$row['id_siswa']."' />"; ?>        
            <tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['nama_siswa'];?></td>
				<td><?php echo $row['nis'];?></td>
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
			$i++;
		}
			$jumSis = $i-1;
		?>
        <input type="hidden" name="jumlah" value="<?php echo $jumSis ?>" />
        </table>
        <!--  end product-table................................... --> 		
        
        
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
