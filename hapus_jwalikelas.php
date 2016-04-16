<?php
include "conn.php";
mysql_query("Delete from tbl_jwalikelas where id_jwalikelas='$_GET[id_jwalikelas]'");

include "jadwal_walikelas.php";
?>