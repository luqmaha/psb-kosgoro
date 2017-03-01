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
 
	$id=$_GET['id'];
	mysqli_query($conn, "DELETE FROM tb_pesan WHERE psn_id='$id'");

	echo '<script> window.location="?p=pesan.view"; </script>';
?>
