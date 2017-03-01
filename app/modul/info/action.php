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
 
	// INSERT
	if (isset($_POST['insert'])){
	$info_judul = $_POST['info_judul'];
	$info_isi   = $_POST['info_isi'];

	mysqli_query($conn, "INSERT INTO tb_info(info_judul, 
											 info_isi, 
											 info_tglpost) VALUES('$info_judul', 
												   				  '$info_isi', 
												   				  NOW())");

	echo '<script> window.location="?p=info.view"; </script>';
	exit();				
	}

	// UPDATE
	if (isset($_POST['update'])){
	$id    = $_POST['id'];
	$info_judul = $_POST['info_judul'];
	$info_isi   = $_POST['info_isi'];

	mysqli_query($conn, "UPDATE tb_info SET info_judul   = '$info_judul',
								 			info_isi  	 = '$info_isi',
								 			info_tglpost = NOW()							
	 									WHERE info_id 	 = '$id'");

	echo '<script> window.location="?p=info.view"; </script>';
	exit();
	}

	// DELETE
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM tb_info WHERE info_id = '$id'");

	echo '<script> window.location="?p=info.view"; </script>';
	exit();
?>