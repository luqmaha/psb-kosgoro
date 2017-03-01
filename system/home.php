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
		<h3 class="page-header">Beranda</h3>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-body">  
                <ul class="timeline">
                    <li>
                    <div class="timeline-badge success"><i class="fa fa-check"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <?php
                                $view=mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='1'");
                                $row=mysqli_fetch_assoc($view);
                            ?>
                                <h4 class="timeline-title"><?php echo $row['info_judul'];?></h4>
                            </div>
                            <div class="timeline-body"><?php echo $row['info_isi'];?></div>
                        </div>
                    </li>       
                    <li class="timeline-inverted">
                    <div class="timeline-badge info"><i class="fa fa-hand-o-right"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <?php
                                $view=mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='2'");
                                $row=mysqli_fetch_assoc($view);
                            ?>
                                <h4 class="timeline-title"><?php echo $row['info_judul'];?></h4>
                            </div>
                            <div class="timeline-body"><?php echo $row['info_isi'];?></div>
                        </div>
                    </li>
                    <li>
                    <div class="timeline-badge info"><i class="fa fa-hand-o-left"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <?php
                                $view=mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='3'");
                                $row=mysqli_fetch_assoc($view);
                            ?>
                                <h4 class="timeline-title"><?php echo $row['info_judul'];?></h4>
                            </div>
                            <div class="timeline-body"><?php echo $row['info_isi'];?></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-badge info"><i class="fa fa-hand-o-right"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <?php
                                $view=mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='5'");
                                $row=mysqli_fetch_assoc($view);
                            ?>
                                <h4 class="timeline-title"><?php echo $row['info_judul'];?></h4>
                            </div>
                            <div class="timeline-body"><?php echo $row['info_isi'];?></div>
                        </div>
                    </li>
                    <li>
                    <div class="timeline-badge info"><i class="fa fa-hand-o-left"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <?php
                                $view=mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='6'");
                                $row=mysqli_fetch_assoc($view);
                            ?>
                                <h4 class="timeline-title"><?php echo $row['info_judul'];?></h4>
                            </div>
                            <div class="timeline-body"><?php echo $row['info_isi'];?></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-badge info"><i class="fa fa-hand-o-right"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                            <?php
                                $view=mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id='7'");
                                $row=mysqli_fetch_assoc($view);
                            ?>
                                <h4 class="timeline-title"><?php echo $row['info_judul'];?></h4>
                            </div>
                            <div class="timeline-body"><?php echo $row['info_isi'];?></div>
                        </div>
                    </li>
                </ul>
            </div></div></div>
            <?php include_once ('jadual.php'); ?>
        