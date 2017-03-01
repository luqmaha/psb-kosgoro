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
        <h3 class="page-header">Data Jurusan</h3>
    </div>
</div>

<div class="btn-group" role="group" aria-label="...">
    <a class="btn btn-default" title="New Data" data-toggle="modal" data-target="#add" aria-hidden="true"><i class="fa fa-plus fa-fw"></i> New Data</a>
    <a href="?p=jurusan.view" title="Refresh" type="button" class="btn btn-default"><i class="fa fa-refresh"></i> Refresh</a>
</div>

<div class="row">
<div class="panel-body">
    <div class="dataTable_wrapper">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>                       
                        <th style="width:7%;">#</th>
                        <th>Jurusan</th>
                        <th>Keterangan</th>
                        <th>Akreditasi</th>      
                        <th style="text-align:center;">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_jurusan order by jur_id");
                        $no=0;
                        while ($data=mysqli_fetch_assoc($sql)) {
                        $no++;
                    ?>
                    <tr class="odd gradeX">                  
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td style="text-align:center;"><?php echo $data['jur_nama']; ?></td>
                        <td ><?php echo $data['jur_ket']; ?></td>
                        <td style="text-align:center;"><?php echo $data['jur_akre']; ?></td>
                        <td style="text-align:center;">

                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-default btn-sm" title="Detail Data" data-toggle="modal" data-target="#detail<?php echo $data['jur_id']; ?>"><span class="fa fa-search fa-fw" aria-hidden="true"></span></a>

                            <a class="btn btn-default btn-sm" title="Edit Data" data-toggle="modal" data-target="#edit<?php echo $data['jur_id']; ?>"><span class="fa fa-pencil fa-fw" aria-hidden="true"></span></a>

                            <a class="btn btn-default btn-sm" title="Delete Data" data-toggle="modal" data-target="#delete<?php echo $data['jur_id']; ?>" ><span class="fa fa-times fa-fw"></span></a>
                        </div>

                        </td>
                    </tr>

                <!-- MODAL -->
                    <!-- BEGIN ADD -->
                    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Data Jurusan</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="?p=jurusan.action" method="post">
                                        <div class="form-group">
                                        <label> Jurusan</label>
                                            <input type="text" class="form-control" name="jur_nama" placeholder="Username" required/>
                                        </div>
                                        <div class="form-group">
                                        <label> Keterangan</label>
                                            <input type="text" class="form-control" name="jur_ket" placeholder="Keterangan" required/>
                                        </div>
                                        <div class="form-group">
                                        <label> Status Akreditasi</label>
                                            <input type="text" class="form-control" name="jur_akre" placeholder="Status Akreditasi" required/>
                                        </div>
                                    </div>   
                                    <div class="modal-footer">
                                        <button type="submit" name="insert" class="btn btn-primary"> Save</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <!-- END ADD -->
                    
                    <!-- BEGIN EDIT -->
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="edit<?php echo $data['jur_id']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Jurusan</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="?p=jurusan.action" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $data['jur_id']; ?>" >
                                        <div class="form-group">
                                        <label> Jurusan</label>
                                            <input type="text" name="jur_nama" class="form-control" value="<?php echo $data['jur_nama']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label> Keterangan</label>
                                            <input type="text" name="jur_ket" class="form-control" value="<?php echo $data['jur_ket']; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label>Status Akreditasi</label>
                                            <input type="text" name="jur_akre" class="form-control" value="<?php echo $data['jur_akre']; ?>" />
                                        </div>
                                    </div>  
                                    <div class="modal-footer">
                                        <button type="submit" name="update" class="btn btn-primary"> Save</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>       
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <!-- END EDIT -->

                    <!-- BEGIN DETAIL -->
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="detail<?php echo $data['jur_id']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Detail Jurusan</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-5 control-label">Jurusan</label>
                                        <div class="col-lg-6"><?php echo $data['jur_nama']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-5 control-label">Keterangan</label>
                                        <div class="col-lg-6"><?php echo $data['jur_ket']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding:15px;">
                                    <label class="col-lg-5 control-label">Status Akreditasi</label>
                                        <div class="col-lg-6"><?php echo $data['jur_akre']; ?>
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
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="delete<?php echo $data['jur_id']; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"> Hapus Data Jurusan?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="">Data yang sudah terhapus tidak dapat dikembalikan!</div>

                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-danger" href="?p=jurusan.action&id=<?php echo $data['jur_id']; ?>"> Yes</a>
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