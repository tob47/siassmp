<?php
ob_start();
?>
<form name="form1" method="post" action="?page=pelajaransimpan&act=1">
<center>
 <table width="434" height="174" border="0">
	 <tr>
	   <td height="45" colspan="3"><h2 align="center">Input Data Pelajaran </h2></td>
      </tr>
	 <tr>
		 <td width="125" height="38">Nama Pelajaran </td>
		 <td width="7">:</td>
		 <td width="288"><label>
			 <input name="nama_pelajaran" type="text" id="nama_pelajaran" maxlength="30" class="inp-form" />
	   </label></td>
	 </tr>
	 <tr>
		 <td height="51">Nilai KKM </td>
		 <td>:</td>
		 <td><input name="kkm" type="text" id="kkm" maxlength="8" class="inp-form"/></td>
	 </tr>
	 <tr>
		 <td height="30">&nbsp;</td>
		 <td>&nbsp;</td>
		 <td><input type="submit" class="form-submit" name="button" id="button" value="Daftar">&nbsp;&nbsp;<input type="reset" class="form-reset" name="reset" id="reset"> 
		  &nbsp;&nbsp; <input type="button" class="form-batal" name="reset" id="reset" value="Cancel" onclick="window.location='?page=pelajarantampil'"></td>
	 </tr>
</table>
  </center>
</form>
<?php
ob_end_flush();
?>