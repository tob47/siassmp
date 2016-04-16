<?php
include "conn.php";
session_start();
if (empty($_SESSION[username]) AND empty($_SESSION[password])){
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>


<style type="text/css">

table {
  align-table: center; 
	font-family: Tahoma; 
	font-size: 8pt;
	border-width: 1px;
	border-style: solid;
	border-color: #999999;
	border-collapse: collapse;
	margin: 10px 0px;
}
th{
<th width="20">Nomor Induk Siswa</th>
<th width="20">Nama Siswa</th>
<th width="20">Kelas</th>
	font-size: 7pt;
	text-transform: uppercase;
	text-align: left;
	padding: 0.5em;
	border-width: 1px;
	border-style: solid;
	border-color: #969BA5;
	border-collapse: collapse;
	background-color: #dffbff;
}
td{
	padding: 0.5em;
	vertical-align: top;
	border-width: 1px;
	border-style: solid;
	border-color: #969BA5;
	border-collapse: collapse;
}
</style>


<script>
	function popPrint(url){
		window.open(url+"?sid=<?=$_REQUEST["sid"]?>&print=1","CetakLaporan","width=800,height=600,scrollbars=yes,menubar=no,statusbar=no, toolbar=no,resizable=yes");
	}
</script>

<script language="JavaScript">
function makeArray() {
     for (i = 0; i<makeArray.arguments.length; i++)
         this[i] = makeArray.arguments[i];
 }
function getFullYear(d) {
    var y = d.getYear();
    if (y < 1000) {y += 1900};
    return y;
}
var months = new makeArray("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
function format_time(t) {
    var Day = t.getDay();
    var Date = t.getDate();
    var Month = t.getMonth();
    var Year = t.getFullYear();
    timeString = "";
    timeString += Date;
    timeString += " ";
    timeString += months[Month];
    timeString += " ";
    timeString += Year;
   return timeString;
 }
</script><center>
<table width="500" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="0"><table width="800" height="100" border="0" cellpadding="2" cellspacing="0">
        <tr align="center"> 
          <td colspan="4"><div align="left"><strong>LAPORAN </strong><strong>PENILAIAN 
              HASIL BELAJAR</strong></div></td>
        </tr>
        <tr align="center"> 
          <td colspan="4" bgcolor="#dffbff"> 
            <div align="center"></div>
            <div align="center"> 
              <div align="center"><strong>EVALUASI HASIL BELAJAR SISWA</strong></div>
            </div></td>
        </tr>
        <?php
   
if ( $_SESSION[username] =='id_admin'){ $tampil = mysql_query("SELECT 
  * FROM data_siswa ORDER BY id_siswa DESC"); } else{ $tampil=mysql_query("SELECT * 
  FROM data_siswa WHERE id_admin='$_SESSION[username]' ORDER BY id_siswa DESC"); } while($r=mysql_fetch_array($tampil)){ 
  echo "<tr>
        <tr> 
				<td>Nomor Induk Siswa</td>
				<td>: $r[id_siswa]</td>
        </tr>
		<tr> 
				<td>Nama Siswa</td>
				<td>: $r[nama_siswa]</td>
        </tr>
        <tr> 
				<td>Kelas</td>
				<td>: $r[kelas]</td>
        </tr>
		</tr>
	"; } 
?>

<?php
		
   echo "<tr><th>no<th>nama mata pelajaran siswa</th><th>nilai</th><th>keterangan nilai</th><tr>";

    if ( $_SESSION[username] =='id_guru'){
      $tampil = mysql_query("SELECT * FROM tbl_nilai ORDER BY id_nilai DESC");
    }
    else{
      $tampil=mysql_query("SELECT * FROM tbl_nilai
                           WHERE id_user='$_SESSION[namauser]'       
                           ORDER BY id_raport DESC");
     $no=1;
   }
  
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td>$no</td>
                <td>$r[nama_pelajaran]</td>
               <td>$r[nilai_rapor]</td>				
                <td>$r[ket]</td>
				
		        </tr>";
     $no++;
    }
?>
      </table>
      <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="236">
            <p><div align="left"></div></p>
		  <div align="left">Mengetahui,</div>
            <div align="left">Orang Tua / Wali Siswa</div>
            <p> 
            <div align="left"></div>
            <p></p>
            <p>&nbsp;</p>
            <p> 
            <div align="left"></div>
            <p></p>
            <div align="left"> (...............................) </div></td>
          <td width="262"><div align="left">Diberikan di, Tegal</div>
            <div align="left">Tanggal, 
              <script language="JavaScript" type="text/javascript">
							d = new Date();
							document.write(format_time(d));
						</script>
            </div>
            <div align="left"> 
              <div align="left">Wali Kelas</div>
            </div>
            <p> 
            <div align="left"></div>
            <p></p>
            <p>&nbsp;</p>
            <p> 
            <div align="left"></div>
            <p></p>
            <div align="left">(...............................)</div></td>
        </tr>
        <tr align="center"> 
          <td colspan="2"><a href="javascript:window.print();"><img src="../raport/images/printer-blue.gif" width="14" height="14"> 
            [ Cetak Laporan ]</a></td>
        </tr>
      </table>
      </table>
	  </center>
<?
}
?>