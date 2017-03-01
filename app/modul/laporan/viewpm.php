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
        <h3 class="page-header">Diterima Pemasaran</h3>
    </div>
</div>

<div class="btn-group" role="group" aria-label="...">
    <a href="print.php?rdr=laporan.pdfpm" target='_blank' title="Print PDF" class="btn btn-primary"><i class="fa fa-file-pdf-o fa-fw"></i> .PDF</a>
    <a href="../app/modul/excel/xlspm.php" title="Eksport Excel" class="btn btn-success" style="background-color:#169F85;"><i class="fa fa-file-excel-o fa-fw"></i> .XLS</a>
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
                        <th style="width:14%;">Nilai UN</th>
                        <th style="width:11%;">Jurusan</th>
                        <th style="width:15%; text-align:center;">Status</th>
                        <th style="text-align:center;">Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE jurusan='PM' ORDER BY jmlnilai DESC");
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
                        <td style="text-align:center;"><?php echo $data['regist'];?></td>
                        <td style="text-align:center;">

                        <a class="btn btn-info btn-sm" title="Detail" data-toggle="modal" data-target="#myModal<?php echo $data['no_reg']; ?>"><span class="fa fa-search fa-fw" aria-hidden="true"></span></a>
                        
                        </td>
                    </tr>

                <!-- MODAL -->
                    <!-- BEGIN DETAIL -->
                    <div class="modal fade" id="myModal<?php echo $data['no_reg']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $data['no_reg']; ?>" aria-hidden="true">
                          <div class="modal-dialog">
                             <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                   <h4 class="modal-title" id="myModalLabel<?php echo $data['no_reg']; ?>" > Detail</h4>
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
                                   </form>
                                </div>
                                <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DETAIL -->

                    <?php
                        }
                    ?>
                </tbody>    
            </table>
        </div>
    </div>
</div>
</div>
