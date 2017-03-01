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
 
    $get_no  = isset($_POST['no_reg']) ? $_POST['no_reg'] : '';

    $nosql = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE no_reg = '{$get_no}'");
    $row = mysqli_fetch_assoc($nosql);    
?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Cetak Formulir</h2>
    </div>
</div>

<div class="row"> 
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
            	Data Pendaftar
            </div>        
	            <div class="panel-body">
	            	<div class="col-lg-12">
		                <div class="row show-grid">
		                	<div class="col-md-4"><b>Nomor Pendaftaran</b></div>
		                	<div class="col-md-8"><?php echo $row['no_reg']; ?></div>
		                </div>
		                <div class="row show-grid">
		                	<div class="col-md-4"><b>Nama Pendaftar</b></div>
		                	<div class="col-md-8"><?php echo $row['nama']; ?></div>
		                </div>
		                <div class="row show-grid">
		                	<div class="col-md-4"><b>Asal Sekolah</b></div>
		                	<div class="col-md-8"><?php echo $row['as_sklh']; ?></div>
		                </div>
		                <div class="row show-grid">
		                	<div class="col-md-4"><b>Pilihan Keahlian</b></div>
		                	<div class="col-md-8"><?php echo $row['jurpil1']; ?> & <?php echo $row['jurpil2']; ?></div>
		                </div>
		           
            <div class="row show-grid">
                <div class="col-md-12">
                <button class="btn btn-primary" onclick="window.open('print.php?rdr=cetak_form&no_reg=<?php echo $get_no; ?>', '_blank')" > Cetak Formulir Pendaftaran</button>
                </div> 
	        </div>
        </div>
    </div>
</div>