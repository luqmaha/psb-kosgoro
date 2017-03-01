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

?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Kontak</h3>
    </div>
</div>

<?php
 
    if (isset($_POST['save'])) {
    $psn_nama  = $_POST['psn_nama'];
    $psn_email = $_POST['psn_email'];
    $psn_isi   = $_POST['psn_isi'];
    
    // PENGECEKAN DATA GANDA JIKA USER MEREFRESH FORM // RASAH KEMAKI
    $sql = mysqli_query($conn, "SELECT * FROM tb_pesan WHERE psn_nama = '$psn_nama' AND psn_email = '$psn_email'");
    $cek = mysqli_num_rows($sql);
            
    if ($cek > 0) {
    echo "<center><div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <b>Anda sudah mengirimkan pesan!</b></div></center>";
    }
    else
    {
    // INTINE INSERT 
    mysqli_query($conn, "INSERT INTO tb_pesan VALUES ('', '$psn_nama', '$psn_email', '$psn_isi', NOW())");
            
    echo "<center><div class='alert alert-success alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <b>Pesan berhasil dikirim..</b></div></center>";
    
        }
    }
?>

<div class="row"> 
    <div class="col-lg-6">
        <div class="ui large white header"> Peta Lokasi</div><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7822897028263!2d111.90690454995345!3d-7.598656977175219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784babe796a54f%3A0xb873c54b82f262b1!2sSMK+Kosgoro+Nganjuk!5e0!3m2!1sid!2sid!4v1461418022312" width="100%" height="365" frameborder="0" style="border:0" allowfullscreen></iframe><br/><br>
        <p><label> Alamat:</label> Jl. Walter Mongonsidi No.78, Payaman, Kec. Nganjuk, Kabupaten Nganjuk, Jawa Timur, Indonesia<br/></p>
        <p><label>Telepon:</label> +62 358 321832</p>
    </div>

    <div class="col-lg-6">
        <div class="ui large white header"> Kirim Masukan Kritik Dan Saran</div><br>
            <div class="panel panel-default">

            <div class="panel-body">
                <div class="row"> 
                    <div class="col-lg-12">        
                        <form action="" id="defaultForm" method="post" enctype="multipart/form-data">           
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="text" class="form-control" name="psn_nama" placeholder="Nama" required />
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control" name="psn_email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <label>Komentar *</label>
                                <textarea class="form-control" name="psn_isi" rows="4" placeholder="Kirim masukan.." required /></textarea>
                            </div>
                            <div class="pull-right">
                                <button type="submit" name="save" class="btn btn-primary btn-outline"> Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>