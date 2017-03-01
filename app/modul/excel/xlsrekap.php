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
$namaFile = "Rekapitulasi.xls";
 
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

// koneksi ke mysql
$conn = mysqli_connect("localhost", "root", "root");
		mysqli_select_db($conn, "kosgoro_db");

//************************************************************************
// PENDAFTAR - LAKI-LAKI
$laki = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jk = 'L'");
$totl = mysqli_num_rows($laki);

// PENDAFTAR - PEREMPUAN 
$perempuan = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jk = 'P'");
$totp = mysqli_num_rows($perempuan);

// TOTAL PENDAFTAR BERDASARKAN JENIS KELAMIN
$tot = $totl + $totp;

//************************************************************************
// DITERIMA - LAKI-LAKI
$acclaki = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jk = 'L'");
$acctotl = mysqli_num_rows($acclaki);

// DITERIMA - PEREMPUAN
$accperempuan = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jk = 'P'");
$acctotp = mysqli_num_rows($accperempuan);

// TOTAL DITERIMA BERDASARKAN JENIS KELAMIN
$acctot = $acctotl + $acctotp;


//************************************************************************
// NILAI TERTINGGI 
$nil1 = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY jmlnilai DESC");
$res1 = mysqli_fetch_assoc($nil1);
$ntinggi = $res1['jmlnilai'];

// NILAI TERENDAH 
$nil2 = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY jmlnilai ASC");
$res2 = mysqli_fetch_assoc($nil2);
$nrendah = $res2['jmlnilai'];


//************************************************************************
// PENDAFTAR TKJ 
$ptkj = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jurpil1 = 'TKJ'");
$rptkj = mysqli_num_rows($ptkj);

// PENDAFTAR AKT  
$pakt = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jurpil1 = 'AKT'");
$rpakt = mysqli_num_rows($pakt);

// PENDAFTAR PM
$ppm = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jurpil1 = 'PM'");
$rppm = mysqli_num_rows($ppm);

// TOTAL PENDAFTAR BERDASARKAN JURUSAN
$totlp = $rptkj+$rpakt+$rppm;


//************************************************************************
// DITERIMA TKJ
$tkj = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jurusan = 'TKJ' AND status = 'DITERIMA'");
$rtkj = mysqli_num_rows($tkj);

// DITERIMA AKT
$akt = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jurusan = 'AKT' AND status = 'DITERIMA'");
$rakt = mysqli_num_rows($akt);

// DITERIMA PMS
$pm = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jurusan = 'PM' AND status = 'DITERIMA'");
$rpm = mysqli_num_rows($pm);

// TOTAL DITERIMA BERDASARKAN JURUSAN
$totd = $rtkj+$rakt+$rpm;


//************************************************************************
// NAMA SEKOLAH
$sql= mysqli_query($conn, "SELECT *FROM tb_sekolah");
$data= mysqli_fetch_assoc($sql);

 
// ------ membuat kolom pada excel --- //
xlsWriteLabel(1,1,"REKAPITULASI PENERIMAAN SISWA BARU TAHUN AJARAN 2016/2017" );

xlsWriteLabel(3,1,"NAMA SEKOLAH");

xlsWriteLabel(3,2,$data['sek_nama']);

xlsWriteLabel(4,1,"ALAMAT SEKOLAH");

xlsWriteLabel(4,2,$data['sek_alamat']);

xlsWriteLabel(5,1,"TELEPON");

xlsWriteLabel(5,2,$data['sek_telp']);

xlsWriteLabel(6,1,"KABUPATEN");

xlsWriteLabel(6,2,$data['sek_kab']);


xlsWriteLabel(8,0,"NO");

xlsWriteNumber(10,0,"1");

xlsWriteNumber(11,0,"2");

xlsWriteNumber(12,0,"3");

xlsWriteLabel(15,1,"JML PENDAFTAR");

xlsWriteNumber(15,2,$tot);

xlsWriteLabel(16,1,"Laki-laki");

xlsWriteNumber(16,2,$totl);

xlsWriteLabel(17,1,"Perempuan");

xlsWriteNumber(17,2,$totp);

xlsWriteLabel(19,1,"JML DITERIMA");

xlsWriteNumber(19,2,$acctot);

xlsWriteLabel(20,1,"Laki-laki");

xlsWriteNumber(20,2,$acctotl);

xlsWriteLabel(21,1,"Perempuan");

xlsWriteNumber(21,2,$acctotp);        
 

xlsWriteLabel(8,1,"JURUSAN");   

xlsWriteLabel(10,1,"TKJ");

xlsWriteLabel(11,1,"AKT");

xlsWriteLabel(12,1,"PM");

xlsWriteLabel(13,1,"JML");          
 

xlsWriteLabel(8,2,"AKREDITASI");

xlsWriteLabel(10,2,"-");

xlsWriteLabel(11,2,"A");

xlsWriteLabel(12,2,"A");


xlsWriteLabel(15,4,"NIL TERTINGGI");

xlsWriteNumber(15,5,$ntinggi);  

xlsWriteLabel(17,4,"NIL TERENDAH");

xlsWriteNumber(17,5,$nrendah);

 
xlsWriteLabel(8,3,"PENERIMAAN SISWA BARU"); 


xlsWriteLabel(9,3,"PENDAFTAR");
 
xlsWriteNumber(10,3,$rptkj);

xlsWriteNumber(11,3,$rpakt);

xlsWriteNumber(12,3,$rppm);

xlsWriteNumber(13,3,$totlp);


xlsWriteLabel(9,4,"DITERIMA");

xlsWriteNumber(10,4,$rtkj);

xlsWriteNumber(11,4,$rakt);

xlsWriteNumber(12,4,$rpm);

xlsWriteNumber(13,4,$totd);

// -------- menampilkan data --------- //
 
// memanggil function penanda akhir file excel
xlsEOF();
exit();
?>