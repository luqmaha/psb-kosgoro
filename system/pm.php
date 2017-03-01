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

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pemasaran</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="container-fluid">
<div class="col-lg-10 col-md-offset-1">
        <?php include_once ('header.php'); ?>
    <center>    
        <td><b>PENDAFTAR YANG DITERIMA PADA PAKET KEAHLIAN PEMASARAN</b></td>
    </center><br/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align:center;">Rank</th>
                    <th style="text-align:center;">No Pendaftaran</th>
                    <th style="text-align:center;">Nama</th>
                    <th style="text-align:center;">L/P</th>
                    <th style="text-align:center;">Asal Sekolah</th>
                    <th style="text-align:center;">Nilai UN</th>
                    <th style="text-align:center;">Jurusan</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                $sql = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jurusan='PM' ORDER BY jmlnilai DESC");  
                $no = 0;
                while ($data=mysqli_fetch_assoc($sql)) {
                $no++;
            ?>      
                <td style="text-align:center;"><?php echo $no; ?></td> 
                <td style="text-align:center;"><?php echo $data['no_reg']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td style="text-align:center;"><?php echo $data['jk']; ?></td>
                <td><?php echo $data['as_sklh']; ?></td>
                <td style="text-align:center;"><?php echo $data['jmlnilai']; ?></td>
                <td style="text-align:center;"><?php echo $data['jurusan']; ?></td>
            </tr>
            <?php
                    } 
                ?> 
            </tbody>   
        </table><br/>
        <?php include 'footer.php' ?>
    </div>
</div>
<br/>
<br/>
</body>
</html>