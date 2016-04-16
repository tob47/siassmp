<?php session_start();

if($_SESSION['domain']=='guru'){
	$id_guru=$_SESSION['id_guru'];
	$username=ucwords($_SESSION['username']);
	
	$data=mysql_fetch_array(mysql_query("select * from data_guru where id_guru='$id_guru'"));

	$kelamin=$data['kelamin'];
	
	if($kelamin=='laki-laki'){
		$sapaan='Pak ';
	}else{
		$sapaan='Ibu ';
	}
	
	$pengguna=$sapaan.$username;
}else{
	$pengguna=ucwords($_SESSION['username']);
}

?>

<div id="page-heading">
    <h1>Hi..., <?php echo $pengguna;?> :)</h1>
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
    <div id="content-table-inner">
    		
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left">Selamat Datang di  Sistem Informasi Akademik Sekolah. Waktu Akses [ <?php echo $_SESSION['waktu'];?> ]</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
          
			<!--  start message-yellow -->
            <!--
            <div id="message-yellow">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
                <td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            -->
            
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"></p>
               <marquee behavior="alternate"> 
               <h2>Selamat Datang !!</h2>
               </marquee>
                <h2><br />
                </h2>
                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perkembangan teknologi komputer di Indonesia sudah sangat pesat sekali, hal ini terlihat dari penggunaan teknologi informasi yang kini mulai merambah ke sektor pendidikan seperti sekolah. Sekolah-sekolah yang ingin terus meningkatkan kualitas juga sudah mulai menerapkan teknologi informasi untuk kelancaran kegiatan di sekolah tersebut.                </h2>
                </div>
                <h2 align="center"></h2>
                <!-- end id-form  -->
              </td>
              <td>
              	  <?php include "profile_info.php";?>  
              </td>
            </tr>
            <tr>
              <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
          </table>

      

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
