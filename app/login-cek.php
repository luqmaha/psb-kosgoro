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

	require_once ('../lib/config.php');
	
	$user = $conn->real_escape_string($_POST['usr_username']);
	$pass = $conn->real_escape_string($_POST['usr_password']);

	$login = mysqli_query($conn, "SELECT * FROM tb_user WHERE usr_username='".$user."' AND usr_password='".sha1($pass)."' AND usr_blokir='N'");

	$row = mysqli_fetch_assoc($login); 
		
	if(mysqli_num_rows($login) > 0){

		session_start();
	    $_SESSION['usr_id']  	  = $row['usr_id'];
	    $_SESSION['usr_username'] = $user;
	    $_SESSION['usr_nama'] 	  = $row['usr_nama'];
	    $_SESSION['usr_password'] = $row['usr_password'];	    

	    header('location:admin.php');

	}else{
		header('location:index.php?action=error');
	}
?>