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

    $get_no  = isset($_GET['no_reg']) ? $_GET['no_reg'] : '';
    //$get_no=mysql_real_escape_string($_POST['no_reg']); 
    include_once ("lib/fungsi.php");

    $nosql = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE no_reg = '$get_no'");
    $data = mysqli_fetch_assoc($nosql); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bukti Pendaftaran</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="container-fluid">
<div class="col-lg-10 col-md-offset-1">

    <?php include_once ('header.php'); ?>

<center>    
    <td><b><u>TANDA BUKTI PENDAFTARAN SISWA BARU ONLINE TAHUN <?php echo date("Y") ?></u></b></td>
</center><br/>
    
<td width='20'><!-- margin kanan --></td>       
    <td>
    <table style='font-family: "Times New Roman"; font-size: 16px; line-height: 40px;' width="100%">
        <tr>
        <td width="180">Nomor Pendaftaran</td><td>:</td><td><?php echo $data['no_reg']; ?></td>
        <!--
        <td width='180' rowspan='15' valign='top' align='right' colspan='4' style="padding-top:20px;">
            <table border='2'>
                <tr>
                    <td width='150' height='188' align="center"> PAS FOTO<br/>3x4</td>
                </tr>
            </table>
        </td> -->
        </tr>
        <tr>
            <td> Nama Pendaftar</td><td width='10'>:</td><td><?php echo $data['nama']; ?></td>
        </tr>   
        <tr>
            <td> Tempat, Tanggal Lahir</td><td>:</td><td><?php echo $data['tmp_lhr'].", ".date_format(date_create($data['tgl']), 'd-m-Y'); ?></td>
        </tr>
        <tr>
            <td> Asal Sekolah</td><td>:</td><td><?php echo $data['as_sklh']; ?></td>
        </tr>
        <tr>
            <td> Nilai B.Indonesia</td><td>:</td><td><?php echo $data['bin']; ?></td>
        </tr>
        <tr> 
            <td> Nilai B.Inggris</td><td>:</td><td><?php echo $data['big']; ?></td>
        </tr>
        <tr>    
            <td> Nilai Matematika</td><td>:</td><td><?php echo $data['mat']; ?></td>
        </tr>
        <tr>
            <td> Nilai IPA</td><td>:</td><td><?php echo $data['ipa']; ?></td>
        </tr>
        <tr>
            <td> Jumlah Nilai UN</td><td>:</td><td><?php echo $data['jmlnilai']; ?></td>
        </tr> 
        <tr>
            <td> Pilihan Jurusan</td><td>:</td><td><?php echo $data['jurpil1']." & ".$data['jurpil2']; ?></td>
        </tr>
        <tr>
            <td> Nama Orang Tua</td><td>:</td><td><?php echo $data['ortu']; ?></td>
        </tr>
        <tr>
            <td> Alamat Rumah</td><td>:</td><td> RT <?php echo $data['rt']; ?> RW <?php echo $data['rw']; ?> <?php echo $data['alamat']; ?></td>
        </tr>
        <tr>
            <td> Nomor HP</td><td>:</td><td><?php echo $data['no_hp']; ?></td>
        </tr>
        <tr>
            <td colspan='4'><br></td>
        </tr>

        <td width='20'><!-- margin kiri --></td> 

        <?php
            $query = mysqli_query($conn, "SELECT *FROM tb_user");
            $row   = mysqli_fetch_assoc($query);
        ?>

        <table align="left" style='font-family: "Times New Roman"; font-size: 16px;'>  
            <tr>
                <td>Mengetahui</td>
            </tr>
            <tr>
                <td>Panitia PSB</td>
            </tr>
            <tr>
                <td style="padding-top:70px;"><b><?php echo $row['usr_nama']; ?></b></td>
            </tr>
        </table>        

        <table align="right" style='font-family: "Times New Roman"; font-size: 16px;'>  
            <tr>
                <td>Nganjuk, <?php echo TanggalIndo($data['tgl_daftar']); ?></td>
            </tr>
            <tr>
                <td>Pendaftar</td>
            </tr>
            <tr>
                <td style="padding-top:70px;"><b><?php echo $data['nama']; ?></b></td>
            </tr>
        </table>
          
    </table>
    </td>
</div>
</div>
<br/><br/>
</body>
</html>