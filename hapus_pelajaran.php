<?php
include "conn.php";
mysql_query("Delete from tbl_jadwal where id_jadwal='$_GET[id_jadwal]'");

include "jadwal_pengajaran.php";
?>