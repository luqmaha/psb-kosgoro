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

 require_once ('../lib/library.php');

?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin.php">PSB Online</a>                   
    </div>
        
        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo "$hari_ini, <span id='date'></span>" ?>
                </a> 
            </li>
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-linux fa-fw"></i> <?php echo $_SESSION['usr_username']; ?> <i class="fa fa-caret-down fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <strong><?php echo $_SESSION['usr_nama']; ?></strong>
                        </a>
                        <a href="#">
                            <i class="fa fa-smile-o fa-fw"></i>
                            <script language=javascript>
                                var d = new Date();
                                var h = d.getHours();
                                    if (h < 11) { document.write('Selamat Pagi...'); 
                                    }
                                    else { if (h < 15) { document.write('Selamat Siang...'); 
                                    }
                                    else { if (h < 19) { document.write('Selamat Sore...'); 
                                    }
                                    else { if (h <= 23) { document.write('Selamat Malam...'); 
                                    }
                                }}}
                            </script>
                        </a>
                        <a href="#">
                            <i class="fa fa-clock-o fa-fw"></i><?php echo "<span id='clock'></span>" ?>
                        </a> 
                    </li>
                    <li class="divider"></li>
                        <li><a href="../" target="_blank"><i class="fa fa-eye fa-fw"></i> Lihat Website</a>
                    </li>
                    <li class="divider"></li>
                        <li><a href="?p=users.akun"><i class="fa fa-user fa-fw"></i> Profil</a>
                    </li>
                    <li class="divider"></li>
                        <li><a href="?p=users.password"><i class="fa fa-key fa-fw"></i> Ganti Password</a>
                    </li>
                    <li class="divider"></li>
                        <li><a href="#" id="logout"><i class="fa fa-power-off fa-fw"></i> Log Out...</a>
                    </li>
                </ul>
            </li>
        </ul>

           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?p=dash"><i class="fa fa-windows fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="?p=users.akun"><i class="fa fa-linux fa-fw"></i> User</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-mortar-board fa-fw"></i> Akademik<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?p=jurusan.view"><i class="fa fa-genderless fa-fw"></i> Jurusan</a>
                                </li>
                                <li>
                                    <a href="?p=tahunajar.view"><i class="fa fa-genderless fa-fw"></i> Tahun Ajaran</a>
                                </li>
                            </ul>
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Data Pendaftar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?p=data.views"><i class="fa fa-genderless fa-fw"></i> Pendaftar</a>
                                </li>
                                <li>
                                    <a href="?p=data.view-acc"><i class="fa fa-genderless fa-fw"></i> Diterima</a>
                                </li>
                            </ul>    
                        </li>                      
                        <li>
                            <a href="#"><i class="fa fa-folder-open fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?p=laporan.viewtkj">Diterima TKJ</a>
                                </li>
                                <li>
                                    <a href="?p=laporan.viewakt">Diterima AKT</a>
                                </li>
                                <li>
                                    <a href="?p=laporan.viewpm">Diterima PM</a>
                                </li>
                                <li>
                                    <a href="?p=laporan.rekap">Rekapitulasi</a>
                                </li>
                            </ul>
                        </li>  
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?p=setting.sekolah"><i class="fa fa-genderless fa-fw"></i>Set. Identitas</a>
                                </li>
                                <li>
                                    <a href="?p=setting.web"><i class="fa fa-genderless fa-fw"></i>Set. Web</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?p=info.view"><i class="fa fa-info fa-fw"></i> Informasi</a>
                        </li>
                        <li>
                            <a href="?p=pesan.view"><i class="fa fa-envelope-o fa-fw"></i> Inbox</a>
                        </li>
                        <li style="text-align:center;">
                            <a class="active">SMK Kosgoro © <?php echo date("Y") ?></a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
