<?php

/**
 * PSB Online - SMK Kosgoro Nganjuk
 * ------------------------------------------------------------------------
 * @package     PSB Online
 * @author      Luqman Hakim <luckman.heckem@gmail.com>
 * @copyright   Copyright (c) 2016
 * @link        github.com/luqmanhakim1
 * ------------------------------------------------------------------------
 * Template by www.startbootstrap.com
 */
  
// nama file
$namaFile = "Akuntansi.xls";
 
// Function penanda awal file (Begin Of File) Excel
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}
// Function penanda akhir file (End Of File) Excel
function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}
// Function untuk menulis data (angka) ke cell excel 
function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
} 
// Function untuk menulis data (text) ke cell excel
function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}
 
// header file excel
 
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
 
// header untuk nama file
header("Content-Disposition: attachment; filename=".$namaFile."");
 
header("Content-Transfer-Encoding: binary ");
 
// memanggil function penanda awal file excel
xlsBOF();
 
// ------ membuat kolom pada excel --- //
xlsWriteLabel(1,3," DATA PESERTA DIDIK TAHUN 2016 " );
xlsWriteLabel(2,3," SMK KOSGORO NGANJUK " );
xlsWriteLabel(3,3," TAHUN AJARAN 2015 / 2016 " );
 
// mengisi pada cell A1 (baris ke-5, kolom ke-0)++
xlsWriteLabel(5,0,"RANK");              

xlsWriteLabel(5,1,"NO.DAFTAR");             

xlsWriteLabel(5,2,"NAMA SISWA");

xlsWriteLabel(5,3,"L/P");

xlsWriteLabel(5,4,"ASAL SEKOLAH");

xlsWriteLabel(5,5,"NILAI UN");

xlsWriteLabel(5,6,"JURUSAN");

xlsWriteLabel(5,7,"STATUS");

// -------- menampilkan data --------- //
 
// koneksi ke mysql
$conn = mysqli_connect("localhost", "root", "root");
		mysqli_select_db($conn, "kosgoro_db");
 
$query = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jurusan='AKT' ORDER BY jmlnilai DESC");
 
// nilai awal untuk baris cell
$noBarisCell = 6;
 
// nilai awal untuk nomor urut data
$noData = 1;

while ($data = mysqli_fetch_assoc($query))
{

// menampilkan no. urut data
xlsWriteNumber($noBarisCell,0,$noData);

xlsWriteLabel($noBarisCell,1,$data['no_reg']);

xlsWriteLabel($noBarisCell,2,$data['nama']);

xlsWriteLabel($noBarisCell,3,$data['jk']);

xlsWriteLabel($noBarisCell,4,$data['as_sklh']);

xlsWriteNumber($noBarisCell,5,$data['jmlnilai']);

xlsWriteLabel($noBarisCell,6,$data['jurusan']);

xlsWriteLabel($noBarisCell,7,$data['status']);


// increment untuk no. baris cell dan no. urut data
$noBarisCell++;
$noData++;
}
 
// memanggil function penanda akhir file excel
xlsEOF();
exit();
?>