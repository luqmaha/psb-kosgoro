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
        <h3 class="page-header">Data Informasi</h3>
    </div>
</div>

<div class="btn-group" role="group" aria-label="...">
    <a class="btn btn-default" title="New Data" href="?p=info.insert"><i class="fa fa-plus fa-fw"></i> New Data</a>
    <a href="?p=info.view" title="Refresh" type="button" class="btn btn-default"><i class="fa fa-refresh"></i> Refresh</a>
</div>

<div class="row">
<div class="panel-body">
    <div class="dataTable_wrapper">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>                       
                        <th style="width:7%;">#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal Posting</th>      
                        <th style="text-align:center;">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_info");
                        $no=0;
                        while ($data=mysqli_fetch_assoc($sql)) {
                        $no++;
                    ?>
                    <tr class="odd gradeX">                        
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td><?php echo $data['info_judul']; ?></td>
                        <td><?php echo $data['info_isi']; ?></td>
                        <td><?php echo date_format(date_create($data['info_tglpost']), 'd-m-Y H:i:s'); ?></td>
                        <td style="text-align:center;">

                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-default btn-sm" title="Edit Data" href="?p=info.update&id=<?php echo $data['info_id']; ?>" ><span class="fa fa-pencil fa-fw"></span></a>

                            <a class="btn btn-default btn-sm" title="Delete Data" data-toggle="modal" data-target="#delete<?php echo $data['info_id']; ?>" aria-hidden="true"><span class="fa fa-times fa-fw"></span></a>
                        </div>

                        </td>
                    </tr>
                    
                <!-- MODAL -->
                    <!-- BEGIN DELETE -->
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="delete<?php echo $data['info_id']; ?>" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel"> Hapus Data Informasi?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="">Data yang sudah terhapus tidak dapat dikembalikan!</div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-danger" href="?p=info.action&id=<?php echo $data['info_id']; ?>"> Yes</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"> No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DELETE -->
                    <?php
                        }
                    ?>
                </tbody>    
            </table>
        </div>
    </div>
</div>                          