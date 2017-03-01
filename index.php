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

 error_reporting(0);
 require_once('lib/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PSB Online - SMK Kosgoro Nganjuk</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bootstrap/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Bootstrap datetimepicker CSS -->
    <link href="dist/bootstrap-datepicker/bootstrap-datepicker3.min.css" rel="stylesheet">

    <!-- Sweet alert -->
    <link href="dist/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="bootstrap/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bootstrap/metisMenu/dist/metisMenu.min.js"></script>
    
    <!-- Custom Theme JavaScript -->   
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Bootstrap Datetimepicker JS-->
    <script src="dist/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!-- Sweet alert -->
    <script src="dist/sweetalert/sweetalert.min.js" type="text/javascript"></script>

</head>

<body class="padTop53">
    <div id="wrap">
        <div class="container">

        <?php require_once('menu.php'); ?>
    
            <div class="inner">

                <?php

                    if(isset($_GET['ref']) && strlen($_GET['ref']) > 0)
                    {
                        $ref=str_replace(".","/",$_GET['ref']).".php";
                    }
                    else
                    {
                        $ref="home.php";    
                    }
                    if(file_exists("system/".$ref))
                    {
                        include("system/".$ref);    
                    }
                    else
                    {
                        include("system/home.php");   
                    }  
                ?>
                
            </div> 
        </div>
    </div>
   
    <table class="table fancy">
        <td>
            <p class="form-control-static">SMK Kosgoro &copy; <?php echo date("Y") ?></p>
        </td>
    </table>

</body>
</html>