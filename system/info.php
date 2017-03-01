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
		<h3 class="page-header">Prosedur Pendaftaran</h3>
	</div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <?php
                $view = mysqli_query($conn, "SELECT *FROM tb_info WHERE info_id = '8'");
                $row = mysqli_fetch_assoc($view);
            ?>
            
        	<div class="panel-body"><?php echo $row['info_isi'];?></div>
		</div>
    </div>

    <?php include_once ('jadual.php'); ?>
