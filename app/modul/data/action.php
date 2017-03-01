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
 
	// KONFIRMASI
	if (isset($_POST['acc'])){
	$id 	  = $_POST['id'];
	$no_reg   = $_POST['no_reg'];
	$nama 	  = $_POST['nama'];
	$jk 	  = $_POST['jk'];
	$as_sklh  = $_POST['as_sklh'];
	$jmlnilai = $_POST['jmlnilai'];
	//$jurusan  = $_POST['jurusan'];
	$status   = $_POST['status'];
	mysqli_query($conn, "UPDATE tb_biodata SET status = '$status' WHERE no_reg = '$id'");

	// MENGIRIM KONFIRMASI
	if($status =='DITERIMA'){
		
	// CEK DATA GANDA 
    $cek = mysqli_query($conn, "SELECT * FROM tb_siswa WHERE no_reg = '$no_reg' AND nama = '$nama'");
    $result  = mysqli_fetch_array($cek);
            
    if ($result > 0){
        echo("<script> sweetAlert('Whoops..', 'Data Sudah Ada!', 'error'); </script>");

	}else{
	$send = mysqli_query($conn, "INSERT INTO tb_siswa VALUES('', '$no_reg', '$nama', '$jk', '$as_sklh', '$jmlnilai', '', NOW(), '$status')")or die(mysql_error());
	}
		echo ("<script> swal('Success!', 'Berhasil Dikonfirmasi', 'success'); </script>");
		echo '<meta http-equiv="refresh" content="0;URL=?p=data.views">';

	}else{
		echo ("<script> sweetAlert('Oops!', 'Gagal Konfirmasi / Pendaftar Ditolak', 'error'); </script>");
		echo '<meta http-equiv="refresh" content="0;URL=?p=data.views">';
	}
	exit();
}

	// KONFIRMASI PILIHAN JURUSAN
	if (isset($_POST['confirm'])){
	$id 	 = $_POST['id'];
	$jurusan = $_POST['jurusan'];
	$regist	 = $_POST['regist'];
	mysqli_query($conn, "UPDATE tb_siswa SET jurusan = '$jurusan',
											 regist = '$regist' WHERE no_reg = '$id'");
	
	echo ("<script> swal('Success!', 'Berhasil Dikonfirmasi', 'success'); </script>");
	echo '<script> window.location="?p=data.view-acc"; </script>';
	exit();
}
?>
