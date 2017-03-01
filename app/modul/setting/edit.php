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
        <h3 class="page-header">Edit Identitas Sekolah</h3>
    </div>
</div>

<?php
    // SETTING PROFIL
    if (isset($_POST['update'])){

    $allowed_ext    = array('jpg', 'jpeg');

    $logo_name      = $_FILES['sek_logo']['name'];
    $logo_ext       = strtolower(end(explode('.', $logo_name)));
    $logo_size      = $_FILES['sek_logo']['size'];
    $logo_tmp       = $_FILES['sek_logo']['tmp_name'];   

    //$id          = $_POST['id'];
    $sek_nama    = $_POST['sek_nama'];
    $sek_alamat  = $_POST['sek_alamat'];
    $sek_kodepos = $_POST['sek_kodepos'];
    $sek_kepsek  = $_POST['sek_kepsek'];
    $sek_nip     = $_POST['sek_nip'];
    $sek_telp    = $_POST['sek_telp'];
    $sek_kab     = $_POST['sek_kab'];

    $upload_dir = "../dist/";
    $logo       = basename ($logo_name);
    $sek_logo   = str_replace(' ','_',$logo);

    //$getId    = $_GET['q'];
    $cari    = mysqli_query($conn, "SELECT *FROM tb_sekolah");
    $data    = mysqli_fetch_array($cari);

    // Apabila logo tidak diubah
    if (empty($logo_tmp)){  
    $sql = mysqli_query($conn, "UPDATE tb_sekolah 
                                SET sek_nama    = '$sek_nama',
                                    sek_alamat  = '$sek_alamat',
                                    sek_kodepos = '$sek_kodepos',
                                    sek_kepsek  = '$sek_kepsek',
                                    sek_nip     = '$sek_nip',
                                    sek_telp    = '$sek_telp',
                                    sek_kab     = '$sek_kab'");
        if ($sql == TRUE){
        echo "<div class='alert alert-success alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            Identitas Sekolah Berhasil Diubah. <a class='alert-link' href='?p=setting.sekolah'> Back</a></div>";
        }else{
            echo '<div class="alert alert-danger">' . $sql . "<br>" . $conn->error;
            echo '</div>';
        }
    }

    //Apabila logo diubah
    elseif(!empty($logo_tmp)){

    if(in_array($logo_ext, $allowed_ext) === TRUE) {
        if($logo_size < 1044070) {

            $valid = mysqli_query($conn, "SELECT *FROM tb_sekolah WHERE sek_logo = '".$sek_logo."'");
            //$result = $conn->query($valid);

                if ($result=mysqli_num_rows($valid) > 0) {
                    echo '<div class="alert alert-danger"> Data sudah diubah!</div>';
                }else{

                if (move_uploaded_file($logo_tmp,$upload_dir.$sek_logo)){

                    unlink($upload_dir.$data['sek_logo']);

                    $sql = mysqli_query($conn, "UPDATE tb_sekolah 
                                SET sek_nama    = '$sek_nama',
                                    sek_alamat  = '$sek_alamat',
                                    sek_kodepos = '$sek_kodepos',
                                    sek_kepsek  = '$sek_kepsek',
                                    sek_nip     = '$sek_nip',
                                    sek_telp    = '$sek_telp',
                                    sek_kab     = '$sek_kab',
                                    sek_logo    = '$sek_logo'");

                    if ($sql == TRUE){
                        echo "<div class='alert alert-success alert-dismissable'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        Identitas Sekolah Berhasil Diubah. <a class='alert-link' href='?p=setting.sekolah'> Back</a></div>";
                    }else{
                        echo '<div class="alert alert-danger">' . $sql . "<br>" . $conn->error;
                        echo '</div>';
                    }

                }else{
                    echo '<div class="alert alert-danger"> Gagal Upload logo</div>';
                }
            }
        }else{
            echo '<div class="alert alert-danger"> Besar ukuran file surat (file size) maksimal 1 Mb!</div>';    
        }
    }else{
        echo '<div class="alert alert-danger"> Ekstensi file tidak di izinkan!</div>';
        }
    }
}
    //$get_id=$_GET['id'];
    $sql   = mysqli_query($conn, "SELECT *FROM tb_sekolah"); 
    $data  = mysqli_fetch_assoc($sql);
?>

<div class="panel panel-primary">
    <div class="panel-heading"> </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-10">
                               
                <form id="defaultForm" method="post" action="" enctype="multipart/form-data">               
                    <div class="form-group">
                    <label>Nama Sekolah</label>
                        <input type="text" name="sek_nama" class="form-control" value="<?php echo $data['sek_nama']; ?>" />
                    </div>
                     <div class="form-group">
                    <label>Alamat Sekolah</label>
                        <input type="text" name="sek_alamat" class="form-control" value="<?php echo $data['sek_alamat']; ?>" />
                    </div>
                    <div class="form-group">
                    <label>Kode Pos</label>
                        <input type="text" name="sek_kodepos" class="form-control" value="<?php echo $data['sek_kodepos']; ?>" pattern="[0-9]{5,5}" maxlength="5" />
                    </div>
                    <div class="form-group">
                    <label>Nama Kepala Sekolah</label>    
                        <input type="text" name="sek_kepsek" class="form-control" value="<?php echo $data['sek_kepsek']; ?>" />
                    </div>
                    <div class="form-group">
                    <label>NIP</label>    
                        <input type="text" name="sek_nip" class="form-control" value="<?php echo $data['sek_nip']; ?>" maxlength="15" />
                    </div>
                    <div class="form-group">
                    <label>Nomor Telepon</label>
                        <input type="text" name="sek_telp" class="form-control" value="<?php echo $data['sek_telp']; ?>" maxlength="16" />
                    </div>
                    <div class="form-group">
                    <label>Kabupaten</label>
                        <input type="text" name="sek_kab" class="form-control" value="<?php echo $data['sek_kab']; ?>" />
                    </div>
                    <div class="form-group">
                    <label>Logo Sekolah</label></div>                        
                        <img src="../dist/<?php echo $data['sek_logo']; ?>" width="85" height="110" style="margin-bottom: 10px;" />
                        <input type="file" name="sek_logo" accept="image/*" /><i>* Type gambar .jpg/.jpeg</i> 
                    </div>
                    </div><br>
                        <button type="submit" name="update" class="btn btn-primary"> Save</button>
                        <a href="?p=setting.sekolah" class="btn btn-default"> Cancel</a>
                    </div>                    
                </form>
                                
                </div>                          
            </div>
        </div>
    </div>