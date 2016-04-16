<?php

include "conn.php";

if(isset($_GET['id_guru'])){
	
	$id_guru=$_GET['id_guru'];
	$kelas=$_GET['kelas'];
	$id_mapel=$_GET['id_mapel'];
	$id_jadwal=$_GET['id_jadwal'];
	
	$query=mysql_query("select * from tbl_nilai where id_guru='$id_guru' and kelas='$kelas' and id_jadwal='$id_jadwal'");
	$cek=mysql_num_rows($query);
	
	if($cek=='0'){
		//kalo belum ada mode input
		?><script language="javascript">document.location.href="?page=input_nilai_siswa&id_guru=<?php echo $id_guru;?>&id_jadwal=<?php echo $id_jadwal;?>&kelas=<?php echo $kelas;?>";</script><?php
	}else{
		//kalo sudah ada mode update
		?><script language="javascript">document.location.href="?page=input_nilai_update&id_guru=<?php echo $id_guru;?>&id_jadwal=<?php echo $id_jadwal;?>&kelas=<?php echo $kelas;?>";</script><?php
	}

}else{
	unset($_POST['id_guru']);
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
                <td class="green-left">Data berhasil disimpan :)</td>
                <td class="green-right"><a class="close-green"><img src="../nilai_siswa/images/table/icon_close_green.gif"   alt="" /></a></td>
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
                <td class="red-left">Data gagal disimpan</td>
                <td class="red-right"><a class="close-red"><img src="../nilai_siswa/images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>


      	<!--  start product-table ..................................................................................... -->
        
        <!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left">Pilih Mata Pelajaran</div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Input Nilai Siswa</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Selesai</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
        
        
        <form id="mainform" action="">
        <table width="48%" height="51" border="0" cellpadding="0" cellspacing="0" id="product-table">
        <tr bgcolor="#99CC33">
            <td width="10%" height="26">Nomor	</td>
            <td width="60%">Nama Mata Pelajaran</td>
            <td width="30%">Kelas</td>
        </tr>
        
        
        <?php
		$id_guru=$_SESSION['id_guru'];
		$view=mysql_query("select * from tbl_jadwal where id_guru='$id_guru' order by id_jadwal asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><a href="?page=input_nilai&amp;id_guru=<?php echo $id_guru;?>&amp;id_jadwal=<?php echo $row['id_jadwal'];?>&amp;kelas=<?php echo $row['kelas'];?>" style="text-decoration:underline" title="Pilih Mata Pelajaran"><?php echo $row['nama_pelajaran'];?></a></td>
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
