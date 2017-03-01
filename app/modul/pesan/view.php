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
        <h3 class="page-header">Kritik & Saran</h3>
    </div>
</div>

<div class="btn-group" role="group" aria-label="...">
    <a href="?p=pesan.view" type="button" title="Refresh" class="btn btn-default"><i class="fa fa-refresh"></i> Refresh</a>
</div>

<div class="row">                            
<div class="panel-body">
    <div class="dataTable_wrapper">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTables-example">    
                <thead>
                    <tr>
                        <th style="width:7%;">#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Isi Pesan</th>
                        <th>Tanggal Kirim</th>
                        <th style="text-align:center;">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_pesan ORDER BY psn_id DESC");
                        $no=0;
                        while ($data=mysqli_fetch_assoc($sql)) {
                        $no++;
                    ?>   
                                                          
                    <tr class="odd gradeX">
                        <td align="center"> <?php echo $no ?></td>
                        <td><?php echo $data['psn_nama']; ?></td>
                        <td><?php echo $data['psn_email']; ?></td>
                        <td><?php echo $data['psn_isi']; ?></td>
                        <td><?php echo date_format(date_create($data['psn_tglkirim']), 'd-m-Y H:i:s'); ?></td>
                        <td style="text-align:center;">

                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-default btn-sm" title="Detail Data" data-toggle="modal" data-target="#detail<?php echo $data['psn_id']; ?>"><span class="fa fa-search fa-fw" aria-hidden="true"></span></a>

                            <a class="btn btn-default btn-sm" title="Delete Data" data-toggle="modal" data-target="#delete<?php echo $data['psn_id']; ?>" ><span class="fa fa-times fa-fw"></span></a>
                        </div>

                        </td>
                    </tr>

                <!-- MODAL -->
                    <!-- BEGIN DETAIL -->
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="detail<?php echo $data['psn_id']; ?>" >
                          <div class="modal-dialog">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="myModalLabel">Detail Pesan</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-4 control-label">Nama</label>
                                        <div class="col-lg-6"><?php echo $data['psn_nama']; ?>
                                            </div>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-4 control-label">Email</label>
                                        <div class="col-lg-6"><?php echo $data['psn_email']; ?>
                                            </div>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-4 control-label">Isi Pesan</label>
                                        <div class="col-lg-6"><?php echo $data['psn_isi']; ?>
                                            </div>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-4 control-label">Tanggal Kirim</label>
                                        <div class="col-lg-6"><?php echo date_format(date_create($data['psn_tglkirim']), 'd-m-Y H:i:s'); ?>
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- END DETAIL -->

                    <!-- BEGIN DELETE -->
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="delete<?php echo $data['psn_id']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"> Hapus Data Kritik & Saran?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="">Data yang sudah terhapus tidak dapat dikembalikan!
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-danger" href="?p=pesan.delete&id=<?php echo $data['psn_id']; ?>"> Yes </a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"> No </button>
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