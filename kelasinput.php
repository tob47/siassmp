<?php
ob_start();
?>
<form name="form1" method="post" action="?page=kelassimpan&act=1">
<center>
   <table width="399" height="209" border="0" align="center">
   		<tr>
		   <td height="41" colspan="2"><h2 align="center">Input Data Kelas 
		     </h2></td>
	   </tr>
	   <tr>
		   <td width="142" height="41">Nama Kelas : </td>
		   <td width="247"><label>
			   <input name="nama_kelas" type="text" class="inp-form" id="nama_kelas" maxlength="30" />
	     </label></td>
	   </tr>
	   <tr>
		   <td width="142" height="38">Jurusan : </td>
	     <td width="247">
		   <label>
		   <select name="jurusan" id="jurusan" class="inp-form">
		   <option>--Pilih Jurusan--</option>
		     <option value="SSN">SSN</option>
	       </select>
	     </label>	     </td>
	   </tr>
	   
	   <td height="79"></td>
	   <td><label><input type="submit" class="form-submit" name="button" id="button" value="Daftar">
     <input type="reset" class="form-reset" name="reset" id="reset" value="Reset">
     &nbsp;&nbsp;<input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=kelastampil'">
	   </label></td>
	   </tr>
  </table>
      <p></p>
  </center>
</form>
<?php
ob_end_flush();
?>


