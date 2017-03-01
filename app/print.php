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

session_start();
if (empty($_SESSION['usr_username'])){
    header('location:./');
}else{
    require_once ('../lib/config.php');
    require_once ('../lib/library.php');
}
?>

<?php

if(isset($_GET['rdr']) && strlen($_GET['rdr'])>0)
{
	$rdr=str_replace(".","/",$_GET['rdr']).".php";
} 
else 
{
	$rdr="dash.php";
}

if(file_exists("modul/".$rdr))
{
	include("modul/".$rdr);
} 
else 
{
	include("modul/dash.php");
}
?>