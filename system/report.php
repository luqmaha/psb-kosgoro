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

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> Pengumuman</h3>
        </div>
    </div>
    <div class="row"> 
        <div class="col-lg-8">
            <div class="panel panel-primary">
            <div class="panel-heading">Pengumuman Siswa Diterima</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

    <?php
        // CEK OPO WES AKTIF?
        $sql = mysqli_query($conn, "SELECT * FROM tb_post");
        $data = mysqli_fetch_assoc($sql);
        $status = $data['post_status'];

        // NEK ORA AKTIF, PENGUMUMAN DITUTUP
        if ($status == "false")
        {
            echo'<div class="alert alert-info" style="margin-top: 15px;">Pengumuman belum bisa diketahui, karena proses pendaftaran masih berlangsung.
                </div>';
        }
        // NEK WES AKTIF, PENGUMUMAN DIBUKA
        else if ($status == "true")
        {
    ?>
                <form class="form-horizontal" style="margin-top: 20px;" id="defaultForm" action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-lg-4">
                            <a href="print.php?rdr=tkj" target='_blank' class="btn btn-lg btn btn-info btn-block"><i class="fa fa-bar-chart-o fa-fw"></i> TKJ</a>
                        </div>
                        <div class="col-lg-4">
                            <a href="print.php?rdr=akt" target='_blank' class="btn btn-lg btn btn-info btn-block"><i class="fa fa-bar-chart-o fa-fw"></i> Akuntansi</a>
                        </div>
                        <div class="col-lg-4">
                            <a href="print.php?rdr=pm" target='_blank' class="btn btn-lg btn btn-info btn-block"><i class="fa fa-bar-chart-o fa-fw"></i> Pemasaran</a>
                        </div>
                    </div>
                    <?php   
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once ('jadual.php'); ?>
