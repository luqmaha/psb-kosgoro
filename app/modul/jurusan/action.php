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
	$jur_nama = $_POST['jur_nama'];
	$jur_ket  = $_POST['jur_ket'];
	$jur_akre = $_POST['jur_akre'];

	mysqli_query($conn, "INSERT INTO tb_jurusan(jur_nama, 
										jur_ket, 
										jur_akre)VALUES('$jur_nama', 
														'$jur_ket', 
														'$jur_akre')");
	
	echo '<script> window.location="?p=jurusan.view"; </script>';
	exit;			
	}

	// UPDATE
	if (isset($_POST['update'])){
	$id 	  = $_POST['id'];
	$jur_nama = $_POST['jur_nama'];
	$jur_ket  = $_POST['jur_ket'];
	$jur_akre = $_POST['jur_akre'];

	mysqli_query($conn, "UPDATE tb_jurusan SET jur_nama = '$jur_nama',
											   jur_ket  = '$jur_ket',
											   jur_akre = '$jur_akre'							
			 							 WHERE jur_id   = '$id'");

	echo '<script> window.location="?p=jurusan.view"; </script>';
	exit;
	}

	// DELETE 
	$id=$_GET['id'];
	mysqli_query($conn, "DELETE FROM tb_jurusan WHERE jur_id = '$id'");

	echo '<script> window.location="?p=jurusan.view"; </script>';
	exit;
?>