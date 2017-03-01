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
		<h3 class="page-header">Cetak Formulir</h3>
	</div>
</div>
		
<div class="row">
    <div class="col-lg-8" style="padding-bottom:1%;"> 
        <div class="panel panel-primary" style="overflow-x:auto; overflow-y:auto;">
            <div class="panel-heading"> Silahkan Masukkan Nomor Pendaftaran</div><br/>
                <div class="panel-body">
	            	<form class="form-horizontal" action="?ref=detail" method="POST">
	  					
	  					<div class="form-group">
							<label class="col-sm-4 control-label"> Masukkan Nomor Pendaftaran</label>

							<div class="col-sm-5">
					        	<input type="text" data-inputmask="'mask': '9999-9999'" data-mask="" class="form-control col-md-5 input-md" type="show" name="no_reg" id="no_reg" placeholder="Nomor Registrasi" required/>
					        	</div>
							<div class="col-md-2">
								<button class="btn btn-primary input-md" type="submit"><b> Submit</b></button>
							</div>
						
	   					</div><br/>
					</form>
				</div>
			</div><br/>
				
		<div class="">
			<div class="panel panel-primary" style="background-color:#f39c12; border-color:yellow;">
				<div class="panel-body" style="text-align:justify; color:#fff;">Untuk mencetak formulir pendaftaran, silahkan masukan nomor pendaftaran anda. Jika anda belum memiliki nomor pendaftaran, silahkan untuk mengisi <a href="?ref=formulir" style="color:#fff;"> Formulir Pendaftaran</a> terlebih dahulu. 
			</div>
		</div>
	</div>
</div>

	<?php include_once ('jadual.php'); ?>