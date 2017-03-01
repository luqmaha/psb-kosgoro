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

    include_once ("lib/fungsi.php");

    if (isset($_POST['daftar']) && isset($_POST['agree']) && $_POST['nama'] != ''){
    
    // KODE OTOMATIS
    $year     = date("Y"); 
    $nosql    = mysqli_query($conn, "SELECT max(no_reg) AS max_id FROM tb_biodata 
                                     WHERE no_reg LIKE '$year%' ORDER BY no_reg DESC"); 
    $row      = mysqli_fetch_array($nosql);
    $id_max   = $row['max_id'];

    $last_urut= (int) substr($id_max, 4,4);
    $next_urut= $last_urut + 1 ;

    $no_reg   = $year .sprintf("%04s", $next_urut);

    // CREATE PASSWORD MANGGIL FUNGSI
    $password = password();

    $nama     = $_POST['nama'];
    $nama     = str_replace("'","&acute;",$nama);
    $tmp_lhr  = $_POST['tmp_lhr'];
    $tmp_lhr  = str_replace("'","&acute;",$tmp_lhr);

    // EXPLODE DATEPICKER
    $tggl     = $_POST['tgl'];
    $pecah    = explode("-", $tggl);
    $tanggal  = $pecah[0];
    $bulan    = $pecah[1];
    $tahun    = $pecah[2];
    $tgl      = "$tahun:$bulan:$tanggal";

    $jk       = $_POST['jk'];
    $jk       = str_replace("'","&acute;",$jk);
    $as_sklh  = $_POST['as_sklh'];
    $as_sklh  = str_replace("'","&acute;",$as_sklh);

    $bin      = $_POST['bin'];
    $bin      = str_replace(",", ".",$bin);
    $big      = $_POST['big'];
    $big      = str_replace(",", ".",$big);
    $mat      = $_POST['mat'];
    $mat      = str_replace(",", ".",$mat);
    $ipa      = $_POST['ipa'];
    $ipa      = str_replace(",", ".",$ipa);
    $jmlnilai = $_POST['jmlnilai'];
    $jmlnilai = str_replace(",", ".",$jmlnilai);

    $jurpil1  = $_POST['jurpil1'];
    $jurpil1  = str_replace("'","&acute;",$jurpil1);
    $jurpil2  = $_POST['jurpil2'];
    $jurpil2  = str_replace("'","&acute;",$jurpil2);

    $ortu     = $_POST['ortu'];
    $ortu     = str_replace("'","&acute;",$ortu);
    $rt       = $_POST['rt'];
    $rt       = str_replace("'","&acute;",$rt);
    $rw       = $_POST['rw'];
    $rw       = str_replace("'","&acute;",$rw);
    $alamat   = $_POST['alamat'];
    $alamat   = str_replace("'","&acute;",$alamat);
    $no_hp    = $_POST['no_hp'];
    $no_hp    = str_replace("'","&acute;",$no_hp);   
    
    // PENGECEKAN DATA GANDA JIKA USER MEREFRESH FORM // RASAH KEMAKI
    $query = mysqli_query($conn, "SELECT * FROM tb_biodata WHERE nama = '$nama' AND jk = '$jk'");
    $cek = mysqli_num_rows($query);
            
    if ($cek > 0) {
        echo("<script> sweetAlert('Whoops!', 'Anda Sudah Terdaftar!', 'error'); </script>");
    }
    else
    {
    // INTINE INSERT
    $sql = mysqli_query($conn, "INSERT INTO tb_biodata 
                                VALUES ('', 
                                        '$no_reg', 
                                        '$password', 
                                        '$nama', 
                                        '$tmp_lhr', 
                                        '$tgl', 
                                        '$jk', 
                                        '$as_sklh', 
                                        '$bin', 
                                        '$big', 
                                        '$mat', 
                                        '$ipa', 
                                        '$jmlnilai', 
                                        '$jurpil1', 
                                        '$jurpil2', 
                                        '$ortu', 
                                        '$rt', 
                                        '$rw', 
                                        '$alamat', 
                                        '$no_hp', 
                                        NOW(), 
                                        '')");

    if ($sql){
            echo("<script> swal('Success!', 'Anda Berhasil Mendaftar', 'success'); </script>");
            // TAMPILKAN DETAIL NAMA DAN NOMOR PENDAFTARAN
            $sql=mysqli_query($conn, "SELECT nama FROM tb_biodata WHERE no_reg='$no_reg'");
            $data=mysqli_fetch_assoc($sql);
            $_SESSION['nama']=$data['nama'];
            $_SESSION['nama']." Terdaftar";
    }
    else
    {       
        echo("<script> sweetAlert('Whoops!', 'Data Belum Tersimpan, Mohon di Cek Kembali!', 'error');
            </script>");      
            };
        }
    }
    else
    {
        // VALIDASI JIKA KEMAKI
        $_POST['nama']." Data Belum Lengkap";
        echo "<script type='text/javascript'>window.location = '?ref=formulir'; </script>";
    }
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"></h3>
    </div>
</div>

<div class="row"> 
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <center><h3><b>DATA PENDAFTAR</b></h3></center><br/>
                <div class="panel panel-default" style="overflow-x:auto;overflow-y:auto;"></div>
                    <div class="panel-body col-lg-10 col-lg-offset-1">
                        <div class="row show-grid">
                            <div class="col-md-5"><b>Nomor Pendaftaran</b></div>
                            <div class="col-md-7"><?php echo $no_reg; ?></div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-md-5"><b>Nama Pendaftar</b></div>
                            <div class="col-md-7"><?php echo $nama; ?></div>
                        </div>
                    </div>
                    <div class="">
                        <div class="small-box bg-yellow col-md-10 col-md-offset-1" style="background-color:#f39c12; border-color:yellow;">
                        <div class="panel-body" style="text-align:center; color:#fff;">Note: Harap Simpan Detail di atas untuk keperluan pendaftaran selanjutnya
                        </div>
                    </div>
                    <div class="col-lg-12" style="text-align:center;padding-top:2%;">
                        <p><a href="?ref=formulir" class="btn btn-danger"><i class="fa fa-arrow-circle-left fa-fw"></i><b> Back</b></a>
                        
                        <a href="?ref=cetak" class="btn btn-primary" target='_blank'><i class="fa fa-arrow-circle-right fa-fw"></i><b> Next</b></a>
                        </p>
                    </div>                    
                </div>
            </div>
        </div>