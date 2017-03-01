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
        <h3 class="page-header">Pendaftar Diterima</h3>
    </div>
</div>

<div class="btn-group" role="group" aria-label="...">
    <a href="?p=data.view-acc" type="button" title="Refresh" class="btn btn-default"><i class="fa fa-refresh"></i> Refresh</a>
</div>

<div class="row">
<div class="panel-body">
    <div class="dataTable_wrapper">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>                   
                        <th style="width:7%;">No</th>
                        <th style="width:14%;">No Pendaftar</th>
                        <th>Nama</th>
                        <th style="width:12%;">Nilai UN</th>
                        <th style="width:11%;">Jurusan</th>
                        <th style="width:10%; text-align:center;">Status</th>
                        <th style="width:12%; text-align:center;">Registrasi</th>
                        <th style="text-align:center;">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY id_siswa DESC");
                        $no=0;
                        while ($data=mysqli_fetch_assoc($sql)) {
                        $no++;
                    ?>
                    <tr class="odd gradeX">        
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td ><?php echo $data['no_reg']; ?></td>
                        <td ><?php echo $data['nama']; ?></td>
                        <td style="text-align:center;"><?php echo $data['jmlnilai'];?></td>
                        <td style="text-align:center;"><?php echo $data['jurusan'];?></td>
                        <td style="text-align:center;"><?php echo $data['status'];?></td>
                        <td style="text-align:center;"><?php echo $data['regist'];?></td>
                        <td style="text-align:center;">

                        <div class="btn-group" role="group" aria-label="...">
                            <a class="btn btn-default btn-sm" title="Detail" data-toggle="modal" data-target="#myModal<?php echo $data['no_reg']; ?>"><i class="fa fa-search fa-fw" aria-hidden="true"></i></a>
                            <a class="btn btn-default btn-sm" title="Konfirmasi" data-toggle="modal" data-target="#confirm<?php echo $data['no_reg']; ?>"><i class="fa fa-check fa-fw" aria-hidden="true"></i></a>
                        </div>

                        </td>
                    </tr>

                <!-- MODAL -->
                    <!-- BEGIN DETAIL -->
                    <div class="modal fade" id="myModal<?php echo $data['no_reg']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $data['no_reg']; ?>" aria-hidden="true">
                          <div class="modal-dialog">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="myModalLabel<?php echo $data['no_reg']; ?>" > Detail Pendaftar</h4>
                                </div>
                                <div class="modal-body">
                                   <form>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Nomor Pendaftaran</label>
                                            <div class="col-lg-6"><?php echo $data['no_reg']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Nama Lengkap</label>
                                            <div class="col-lg-6"><?php echo $data['nama']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Jenis Kelamin</label>
                                            <div class="col-lg-6"><?php echo $data['jk']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Asal Sekolah</label>
                                            <div class="col-lg-6"><?php echo $data['as_sklh']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Nilai UN</label>
                                            <div class="col-lg-6"><?php echo $data['jmlnilai']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Pilihan Jurusan</label>
                                            <div class="col-lg-6"><?php echo $data['jurusan']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Status</label>
                                            <div class="col-lg-6"><?php echo $data['status']; ?>
                                            </div>
                                        </div>
                                        <div class="form-group" style="padding:15px;">
                                        <label class="col-lg-5 control-label">Registrasi</label>
                                            <div class="col-lg-6"><?php echo $data['regist']; ?>
                                            </div>
                                        </div>
                                   </form>
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DETAIL -->

                    <!-- BEGIN KONFIRM -->
                    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="confirm<?php echo $data['no_reg']; ?>" >
                    <style type="text/css">
                        #style1 {background-color: #ffffff}
                    </style>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Pendaftar</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="?p=data.action" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $data['no_reg']; ?>">
                                                  
                                    <div class="form-group">
                                    <label>Nomor Pendaftaran</label>
                                        <input type="text" name="no_reg" class="form-control" readonly id="style1" value="<?php echo $data['no_reg']; ?>" />
                                    </div>
                                    <div class="form-group">
                                    <label>Nama Pendaftar</label>
                                        <input type="text" name="nama" class="form-control" readonly id="style1" value="<?php echo $data['nama']; ?>" />
                                    </div>
                                        <input type="hidden" name="jk" class="form-control" value="<?php echo $data['jk']; ?>" />
                                    
                                        <input type="hidden" name="as_sklh" class="form-control" value="<?php echo $data['as_sklh']; ?>" />
                                    
                                    <div class="form-group">
                                    <label>Jumlah Nilai</label>
                                        <input type="text" name="jmlnilai" class="form-control" readonly id="style1" value="<?php echo $data['jmlnilai']; ?>" />
                                    </div>
                                    <div class="form-group">
                                    <label>Pilih Jurusan</label>
                                        <select class="form-control" name="jurusan" />
                                            <option value="<?php echo $data['jurusan']; ?>"> <?php echo $data['jurusan']; ?></option>
                                            <option value="TKJ"> Teknik Komputer Jaringan</option>
                                            <option value="AKT"> Akuntansi</option>
                                            <option value="PM"> Pemasaran</option>
                                        </select>      
                                    </div>
                                    <div class="form-group">
                                    <label>Registrasi</label>
                                        <select class="form-control" name="regist" />
                                            <option value="<?php echo $data['regist']; ?>"> <?php echo $data['regist']; ?></option>
                                            <option value="REGISTER"> REGISTER</option>
                                            <option value="NOT REGISTER"> NOT REGISTER</option>
                                        </select>      
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="confirm" class="btn btn-primary"> Confirm</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>  
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END KONFIRM -->
                    <?php
                        }
                    ?>
                </tbody>    
            </table>
        </div>
    </div>
</div>
</div>
