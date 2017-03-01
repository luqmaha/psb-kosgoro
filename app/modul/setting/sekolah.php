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
        <h3 class="page-header">Identitas Sekolah</h3>
    </div>
</div>

<div class="btn-group" role="group" aria-label="..." style="margin-bottom: 10px;">
    <a href="?p=setting.edit" title="Edit Data" class="btn btn-default"><i class="fa fa-edit fa-fw"></i> Edit Data</a>
</div>

<?php
    //$get_id = $_GET['sek_id'];
    $sql    = mysqli_query($conn, "SELECT * FROM tb_sekolah");
    $data   = mysqli_fetch_assoc($sql);
?>

<div class="row">
    <div class="col-lg-12"> 
        <div class="panel panel-primary">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>Nama Sekolah</td>
                                    <td><?php echo $data['sek_nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekolah</td>
                                    <td><?php echo $data['sek_alamat']; ?></td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td><?php echo $data['sek_kodepos']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Kepala Sekolah</td>
                                    <td><?php echo $data['sek_kepsek']; ?></td>
                                </tr>
                                <tr>
                                    <td>NIP</td>
                                    <td><?php echo $data['sek_nip']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td><?php echo $data['sek_telp']; ?></td>
                                </tr>
                                <tr>
                                    <td>Kabipaten</td>
                                    <td><?php echo $data['sek_kab']; ?></td>
                                </tr>
                                <tr>
                                    <td>Logo Sekolah</td>
                                    <td><img src="../dist/<?php echo $data['sek_logo']; ?>" width="85" height="110" style="margin-bottom: 10px;" /></td>
                                </tr>
                            </thead>     
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                          