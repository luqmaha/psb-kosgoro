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
	$ta_tahunajaran = $_POST['ta_tahunajaran'];
	$ta_status 		= $_POST['ta_status'];
	$ta_kuota		= $_POST['ta_kuota'];
	$ta_akre		= $_POST['ta_akre'];

	mysqli_query($conn, "INSERT INTO tb_tahunajaran(ta_tahunajaran, 
													ta_status, 
													ta_kuota,
													ta_akre)VALUES('$ta_tahunajaran', 
													   				'$ta_status',
													   				'$ta_kuota',
													   				'$ta_akre')");
	
	echo '<script> window.location="?p=tahunajar.view"; </script>';
	exit;				
	}

	// UPDATE
	if (isset($_POST['update'])){
	$id 			= $_POST['id'];
	$ta_tahunajaran = $_POST['ta_tahunajaran'];
	$ta_status 		= $_POST['ta_status'];
	$ta_kuota		= $_POST['ta_kuota'];
	$ta_akre		= $_POST['ta_akre'];

	mysqli_query($conn, "UPDATE tb_tahunajaran SET ta_tahunajaran = '$ta_tahunajaran',
												   ta_status 	  = '$ta_status',
												   ta_kuota	   	  = '$ta_kuota',
												   ta_akre		  = '$ta_akre'							
			 								 WHERE ta_id 		  = '$id'");

	echo '<script> window.location="?p=tahunajar.view"; </script>';
	exit;
	}

	// DELETE
	$id=$_GET['id'];
	mysqli_query($conn, "DELETE FROM tb_tahunajaran WHERE ta_id = '$id'");

	echo '<script> window.location="?p=tahunajar.view"; </script>';
	exit;
?>