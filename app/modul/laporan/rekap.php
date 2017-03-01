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

//*************************************************************************
// PENDAFTAR - LAKI-LAKI
$laki = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jk = 'L'");
$totl = mysqli_num_rows($laki);

// PENDAFTAR - PEREMPUAN 
$perempuan = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE jk = 'P'");
$totp = mysqli_num_rows($perempuan);

// TOTAL PENDAFTAR BERDASARKAN JENIS KELAMIN
$tot = $totl + $totp;

//*************************************************************************
$acclaki = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jk = 'L'");
$acctotl = mysqli_num_rows($acclaki);

// DITERIMA - PEREMPUAN
$accperempuan = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jk = 'P'");
$acctotp = mysqli_num_rows($accperempuan);

// TOTAL DITERIMA BERDASARKAN JENIS KELAMIN
$acctot = $acctotl + $acctotp;


//*************************************************************************
// NILAI TERTINGGI 
$nil1 = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY jmlnilai DESC");
$res1 = mysqli_fetch_assoc($nil1);
$ntinggi = $res1['jmlnilai'];

// NILAI TERENDAH 
$nil2 = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY jmlnilai ASC");
$res2 = mysqli_fetch_assoc($nil2);
$nrendah = $res2['jmlnilai'];


//*************************************************************************
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


//*************************************************************************
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


//*************************************************************************
// NAMA SEKOLAH
$sql= mysqli_query($conn, "SELECT *FROM tb_sekolah");
$data= mysqli_fetch_assoc($sql);

?>

<br/>
<center><h4><b>REKAPITULASI PENERIMAAN SISWA BARU TAHUN AJARAN 2016/2017</b></h4></center><hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table fancy">
                    <tr>
                        <td>NAMA SEKOLAH</td>
                        <td> <?php echo $data['sek_nama']; ?></td>
                    </tr>
                    <tr>
                        <td>ALAMAT SEKOLAH</td>
                        <td> <?php echo $data['sek_alamat']; ?></td>
                    </tr>
                    <tr>
                        <td>TELEPON</td>
                        <td> <?php echo $data['sek_telp'] ?></td>
                    </tr>
                    <tr>
                        <td>KABUPATEN</td>
                        <td> <?php echo $data['sek_kab'] ?></td>
                    </tr>   
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">        
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr class="success">
                        <th rowspan="2" valign="middle" style="text-align:center; width:5%;">NO</th>
                        <th rowspan="2" style="width:25%;">KOMPETENSI KEAHLIAN</th>
                        <th rowspan="2" style="text-align:center; width:20%;">STATUS AKREDITASI</th>
                        <th colspan="2" style="text-align:center; width:100%;">PENERIMAAN SISWA BARU</th>
                    </tr>
                    <tr class="info">      
                        <td style="width:10%; text-align:center;">PENDAFTAR</td>
                        <td style="width:10%; text-align:center;">DITERIMA</td>
                    </tr>  
                    <tr>
                        <td style="text-align:center;">1</td>       
                        <td >TEKNIK KOMPUTER JARINGAN</td>
                        <td style="text-align:center;"> - </td>
                        <td style="text-align:center;"><?php echo $rptkj ?></td>
                        <td style="text-align:center;"><?php echo $rtkj ?></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">2</td>       
                        <td >AKUNTANSI</td>
                        <td style="text-align:center;"> A </td>    
                        <td style="text-align:center;"><?php echo $rpakt ?></td>
                        <td style="text-align:center;"><?php echo $rakt ?></td>
                    </tr>
                    <tr>       
                        <td style="text-align:center;">3</td>       
                        <td >PEMASARAN</td>
                        <td style="text-align:center;"> A </td>
                        <td style="text-align:center;"><?php echo $rppm ?></td>
                        <td style="text-align:center;"><?php echo $rpm ?></td>
                    </tr>
                    <tr style="border:5px;">
                        <td ></td>       
                        <td colspan="2">JUMLAH</td>
                        <td style="text-align:center;"><b><?php echo $totlp ?></b></td>
                        <td style="text-align:center;"><b><?php echo $totd ?></b></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
        
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>PENDAFTAR</th>
                            <th> <?php echo $tot ?></th>
                        </tr>
                        <tr>
                            <td>Laki-Laki</td>
                            <td> <?php echo $totl ?></td>
                        </tr>
                        <tr>
                            <td>Perempuan</td>
                            <td> <?php echo $totp ?></td>
                        </tr>
                        <tr>
                            <th>DITERIMA</th>
                            <th> <?php echo $acctot ?></th>
                        </tr>
                        <tr>
                            <td>Laki-Laki</td>
                            <td> <?php echo $acctotl ?></td>
                        </tr>
                        <tr>
                            <td>Perempuan</td>
                            <td> <?php echo $acctotp ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
                    
        <div class="col-lg-6">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>NILAI TERTINGGI</th>
                            <th> <?php echo $ntinggi ?></th>
                        </tr>
                        <tr>
                            <th>NILAI TERENDAH</th>
                            <th> <?php echo $nrendah ?></th>
                        </tr>                  
                    </table>
                </div>
                <br/>

                <div class="pull-right">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="print.php?rdr=laporan.rekapdf" target='_blank' class="btn btn-primary"><i class="fa fa-file-pdf-o fa-fw"></i> .PDF</a>
                        <a href="../app/modul/excel/xlsrekap.php" id="btnprint" class="btn btn-success" style="background-color:#169F85;"><i class="fa fa-file-excel-o fa-fw"></i> .XLS</a>
                    </div>
                </div>
            </div>
        </div>