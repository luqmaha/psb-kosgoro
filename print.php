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

require( dirname( __FILE__ ) . '/lib/library.php' );
require( dirname( __FILE__ ) . '/lib/config.php' );

if( isset($_GET['rdr']) && strlen($_GET['rdr']) > 0 )
{
	$rdr = str_replace(".","/",$_GET['rdr']).".php";
} 
else 
{
	$rdr = "home.php";
}

if( file_exists("system/".$rdr) )
{
	include("system/".$rdr);
} 
else
{
	include("system/home.php");
}
?>