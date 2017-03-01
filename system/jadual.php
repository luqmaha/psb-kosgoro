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

    <div class="col-lg-4">
        <div class="panel panel-primary">
            <?php
                $view = mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='4'");
                $row = mysqli_fetch_assoc($view);
            ?>
            <div class="panel-heading"><?php echo $row['info_judul'];?></div>
            <div class="panel-body"><?php echo $row['info_isi'];?></div>
        </div>
    </div>

	<div class="col-lg-4">
        <div class="panel panel-primary">	
            <div class="panel-heading">Pendaftaran Siswa Baru SMK Kosgoro Nganjuk</div>
	            <div class="panel-body">
                    <table class="table fancy">
                        <tbody>
                        <?php
                            $view = mysqli_query($conn, "SELECT *FROM tb_tahunajaran WHERE ta_status='Aktif'");
                            $row = mysqli_fetch_assoc($view);
                        ?>
                            <tr>
                                <td>Terakreditasi</td>
                                <td class="col-md-6"><?php echo $row['ta_akre'];?></td>
                            </tr>
                            <tr>
                                <td>Tahun Ajaran</td>
                                <td class="col-md-6"><?php echo $row['ta_tahunajaran'];?></td>
                            </tr>
                            <tr>
                                <td>Kuota Pendaftar</td>
                                <td class="col-md-6"><?php echo $row['ta_kuota'];?> </td>
                            </tr>
                        </tbody>
                    </table>
        		</div>
            </div>
            <div class="alert alert-info" style="margin-top: 15px;"><i>*) Pendaftaran akan ditutup jika kuota pendaftar sudah penuh</i>
                </div>