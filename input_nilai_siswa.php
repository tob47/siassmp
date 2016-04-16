<?php

include "conn.php";

if(isset($_POST['submit'])){
	
	$jumSis = $_POST['jumlah'];
	
	for ($i=1; $i<=$jumSis; $i++)
	{
	   $nilai_uh1  = $_POST['nilai_uh1'.$i];
	   $nilai_uh2  = $_POST['nilai_uh2'.$i];
	   $nilai_uh3  = $_POST['nilai_uh3'.$i];
	   $nilai_uh4  = $_POST['nilai_uh4'.$i];
	   $nilai_uh5  = $_POST['nilai_uh5'.$i];
	   $rata_uh  = $_POST['rata_uh'.$i];
	   
	   $nilai_tugas1  = $_POST['nilai_tugas1'.$i];
	   $nilai_tugas2  = $_POST['nilai_tugas2'.$i];
	   $nilai_tugas3  = $_POST['nilai_tugas3'.$i];
	   $nilai_tugas4  = $_POST['nilai_tugas4'.$i];
	   $rata_tugas  = $_POST['rata_tugas'.$i];
	   
	   $nilai_harian  = $_POST['nilai_harian'.$i];
	   $nilai_uas  = $_POST['nilai_uas'.$i];
	   $nilai_rapor  = $_POST['nilai_rapor'.$i];
	   $kkm  = $_POST['kkm'.$i];
	   $ket  = $_POST['ket'.$i];
 		
		   
	   if($nilai_uh1!=='0')$rata_uh = $nilai_uh1;
	   if($nilai_uh1!=='0' && $nilai_uh2!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2)/2;
	   if($nilai_uh1!=='0' && $nilai_uh2!=='0' && $nilai_uh3!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2 + $nilai_uh3)/3;
	   if($nilai_uh1!=='0' && $nilai_uh2!=='0' && $nilai_uh3!=='0' && $nilai_uh4!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2 + $nilai_uh3 + $nilai_uh4)/4;
	    if($nilai_uh1!=='0' && $nilai_uh2!=='0' && $nilai_uh3!=='0' && $nilai_uh4!=='0' && $nilai_uh5!=='0') $rata_uh = ($nilai_uh1 + $nilai_uh2 + $nilai_uh3 + $nilai_uh4 + $nilai_uh5 )/5;
		
	   if($nilai_tugas1!=='0')$rata_tugas = $nilai_tugas1;
	   if($nilai_tugas1!=='0' && $nilai_tugas2!=='0') $rata_tugas = ($nilai_tugas1 + $nilai_tugas2)/2;
	   if($nilai_tugas1!=='0' && $nilai_tugas2!=='0' && $nilai_tugas3!=='0') $rata_tugas = ($nilai_tugas1 + $nilai_tugas2 + $nilai_tugas3)/3;
	   if($nilai_tugas1!=='0' && $nilai_tugas2!=='0' && $nilai_tugas3!=='0' && $nilai_tugas4!=='0') $rata_tugas = ($nilai_tugas1 + $nilai_tugas2 + $nilai_tugas3 + $nilai_tugas4)/4;
	 
	 if($rata_uh!=='0' && $rata_tugas!=='0') $nilai_harian = ($rata_uh + $rata_tugas)/2;
	 if($nilai_harian!=='0' && $nilai_uas!=='0') $nilai_rapor = (( 2 * $nilai_uas)+ $nilai_harian)/3;
	 
	 if ($nilai_rapor >= $kkm) {
        $hasil = "Lulus";
   		 } else {
        $hasil = "Tidak Lulus";
    	}
   		 echo $hasil;
	 	$ket = $hasil;
	 
	 	 
	   $id_siswa = $_POST['id_siswa'.$i];
	   $id_guru = $_POST['id_guru'];
	   $kelas = $_POST['kelas'];
	   $id_jadwal = $_POST['id_jadwal'];
	
	   $query = "insert into tbl_nilai values('','$id_siswa','$id_jadwal','$kelas','$id_guru','$nilai_uh1','$nilai_uh2','$nilai_uh3',
	 '$nilai_uh4','$nilai_uh5','$rata_uh','$nilai_tugas1','$nilai_tugas2','$nilai_tugas3','$nilai_tugas4','$rata_tugas','$nilai_harian','$nilai_uas','$nilai_rapor','$kkm',' $ket')";
	   $hasil=mysql_query($query);
	}
	
	if($hasil){
		?><script language="javascript">document.location.href="?page=input_nilai_selesai&id_guru=<?php echo $id_guru;?>&kelas=<?php echo $kelas;?>&id_jadwal=<?php echo $id_jadwal;?>";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=input_nilai_selesai&status=2";</script><?php
	}
	
}else{
	unset($_POST['submit']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Input Nilai</h1>
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
                <td class="green-left">Selamat, Data berhasil disimpan :)</td>
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
                <td class="red-left">Maaf, Data gagal di simpan</td>
                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>


      	<!--  start product-table ..................................................................................... -->
        
        <!--  start step-holder -->
		<div id="step-holder">
			
		  <div class="step-no-off">1</div>
			<div class="step-light-left"><a href="?page=input_nilai">Pilih Mata Pelajaran</a></div>
			<div class="step-light-right">&nbsp;</div>
            
            <div class="step-no">2</div>
			<div class="step-dark-left">Input Nilai Siswa</div>
			<div class="step-dark-right">&nbsp;</div>
            
            
			<div class="step-no-off">3</div>
			<div class="step-light-left">Selesai</div>
			<div class="step-light-round">&nbsp;</div>
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
		$kkm=$pelajaran['kkm'];
		
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
          <td><input type="text" class="inp-form" name="nama_kelas" value="<?php echo $nama_kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>      
      <br />
      
        <form id="mainform" action="home.php?page=input_nilai_siswa" method="post">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
         <tr bgcolor="#99CC33">
            <td width="6%" height="28" >Nomor	</td>
            <td width="13%" >Nama Siswa</td>
            <td width="6%" >NIS</td>
            <td width="4%" >Nilai UH1</td>
            <td width="4%" >Nilai UH2</td>
            <td width="4%" >Nilai UH3</td>
            <td width="4%" >Nilai UH4</td>
			<td width="4%" >Nilai UH5</td>
			 <td width="5%">Tugas 1</td>
            <td width="5%" >Tugas 2</td>
            <td width="5%" >Tugas 3</td>
            <td width="5%" >Tugas 4</td>
            <td width="4%" >Nilai UAS</td>
            <td width="7%" >KKM</td>
        </tr>
        <?php
		
		$view=mysql_query("SELECT * FROM data_siswa WHERE kelas='$kelas' order by nama_siswa asc");
		
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
				<td><?php echo "<input type='text' name='nilai_uh1".$i."' size='4' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_uh2".$i."' size='4' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_uh3".$i."' size='4' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_uh4".$i."' size='4' value='0'/>"; ?></td>
				<td><?php echo "<input type='text' name='nilai_uh5".$i."' size='4' value='0'/>"; ?></td>
				<td><?php echo "<input type='text' name='nilai_tugas1".$i."' size='4' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_tugas2".$i."' size='4' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_tugas3".$i."' size='4' value='0'/>"; ?></td>
                <td><?php echo "<input type='text' name='nilai_tugas4".$i."' size='4' value='0'/>"; ?></td>
				<td><?php echo "<input type='text' name='nilai_uas".$i."' size='4' value='0'/>"; ?></td>
				<td><?php echo "<input type='text' name='kkm".$i."' size='4' readonly='true' value='$kkm'/>"; ?></td>
			</tr>
			<?php
			$i++;
		}
			$jumSis = $i-1;
		?>
        <input type="hidden" name="jumlah" value="<?php echo $jumSis ?>" />
        <tr>
            <td colspan="19" align="center"><input type="submit" onclick="return confirm('Apakah Anda yakin?')" value="Input" name="submit"/></td>
        </tr>
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
