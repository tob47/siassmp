<?php
include ('class.ezpdf.php');
  
$pdf = new Cezpdf();
 
// Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('fonts/Courier.afm');

$all = $pdf->openObject();

// Tampilkan logo
//$pdf->setStrokeColor(0, 0, 0, 1);
//$pdf->addJpegFromFile('logo.jpg',20,800,69);

// Teks di tengah atas untuk judul header
$pdf->addText(30, 820, 16,'<b>RAPOR</b>');
$pdf->addText(30, 800, 16,'<b>SMP HARAPAN BERSAMA TEGAL</b>');
// Garis atas untuk header
$pdf->line(10, 795, 578, 795);

// Garis bawah untuk footer
$pdf->line(10, 50, 578, 50);
// Teks kiri bawah
$pdf->addText(30,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

$pdf->closeObject();

// Tampilkan object di semua halaman
$pdf->addObject($all, 'all');

// Koneksi ke database dan tampilkan datanya
include "conn.php";

// Query untuk merelasikan kedua tabel
$nima=$_POST[ni];
$hts=substr($_POST[tahun],0,4);
$ktr=$_POST[semester];

$sql =mysql_query("SELECT b.nama_pelajaran,b.kkm,c.nmjur,c.nmketua,d.nama,f.nmkelas,a.* from tbl_jadwal b,jurusan c,mahasiswa d,kelas f,krs a WHERE b.id_jadwal=a.id_jadwal AND c.kdjur=a.kdjur AND d.nim=a.nim AND f.kdkelas = a.kdkelas AND a.nim='$_POST[nim]' ORDER BY a.kdmatkul");

$jml = mysql_num_rows($sql);

if ($jml <> 0) {
$i = 1;
while($r = mysql_fetch_array($sql)){
    $mutu=$r[sks]*$r[angkamutu];
	$data[$i]=array('<b>No</b>'=>$i, 
                  '<b>Nama Mata Pelajaran</b>'=>$r[nama_pelajaran],
				  '<b>KKM*</b>'=>$r[kkm],
				  '<b>Nilai Angka</b>'=>$r[nilai],
				  '<b>Nilai Abjad</b>'=>$r[angkamutu],
				  '<b>Ket</b>'=>$mutu);
  $totalsks=$totalsks+$r[sks];
  $totalmutu=$totalmutu+$mutu;
$nm=$r[nim];
$nam=$r[nama];
$ketua=$r[nmketua];
$tah=$w[tahun];
$tah2=$w[tahun]+1;
$jur=$r[nmjur];
$ktrg=$r[ket];
  $i++;
}

$pdf->ezText("\nNomor Induk Siswa    : {$nm}");
$pdf->ezText("\nNama Siswa           : {$nam}");
$pdf->ezText("\nTahun Ajaran          : {$tah}/{$tah2}");
$pdf->ezText("\nSemester              : {$ktrg}");
$pdf->ezText("\n");

$ipk=$totalmutu/$totalsks;
$ipka=number_format($ipk, 2, '.', ''); 
$pdf->ezTable($data);
$pdf->ezText("\n      ");
$pdf->ezText("\n                  ");
$pdf->ezText("\n ");

$pdf->ezText("\n                                            Tegal," . date( 'd-m-Y'));
$pdf->ezText("                                            Kepala Sekolah");
$pdf->ezText("\n");
$pdf->ezText("\n");
$pdf->ezText("\n");

$pdf->ezText("                                            Mohamad Tobiin, S.Kom");
// Penomoran halaman
$pdf->ezStartPageNumbers(320, 15, 8);
$pdf->ezStream();
}
else {
	echo "Transkrip Nilai Kosong";
}

?>
