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

	// SETTING WEB
	if (isset($_POST['web'])){
	$post_status   = $_POST['post_status'];
	//$post_postdate = $_POST['post_postdate'];

	mysqli_query($conn, "UPDATE tb_post SET post_status = '$post_status',
							   	 post_postdate = NOW()");
	
	echo '<script> window.location="?p=setting.web"; </script>';
	exit;			
	}
?>
