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
        <h3 class="page-header"> Edit Data Pendaftar</h3>
    </div>
</div>

<?php

    // MANGGIL
    $get_id = $_GET['id'];
    $nosql  = mysqli_query($conn, "SELECT * from tb_biodata WHERE no_reg='$get_id'");
    $data   = mysqli_fetch_array($nosql);

    // UPDATE
    if (isset($_POST['edit'])){
        $id       = $_POST['id'];
        $nama     = $_POST['nama'];
        $tmp_lhr  = $_POST['tmp_lhr'];

        // EXPLODE DATEPICKER
        $tggl     = $_POST['tgl'];
        $pecah    = explode("-", $tggl);
        $tanggal  = $pecah[0];
        $bulan    = $pecah[1];
        $tahun    = $pecah[2];
        $tgl      = "$tahun:$bulan:$tanggal";

        $jk       = $_POST['jk'];
        $as_sklh  = $_POST['as_sklh'];
        $bin      = $_POST['bin'];
        $big      = $_POST['big'];
        $mat      = $_POST['mat'];
        $ipa      = $_POST['ipa'];
        $jmlnilai = $_POST['jmlnilai'];
        $ortu     = $_POST['ortu'];
        $rt       = $_POST['rt'];
        $rw       = $_POST['rw'];
        $alamat   = $_POST['alamat'];
        $no_hp    = $_POST['no_hp'];
        mysqli_query($conn, "UPDATE tb_biodata SET nama  = '$nama',
                                                tmp_lhr  = '$tmp_lhr',
                                                tgl      = '$tgl',
                                                jk       = '$jk',
                                                as_sklh  = '$as_sklh',
                                                bin      = '$bin',
                                                big      = '$big',
                                                mat      = '$mat',
                                                ipa      = '$ipa',
                                                jmlnilai = '$jmlnilai',
                                                ortu     = '$ortu',
                                                rt       = '$rt',
                                                rw       = '$rw',
                                                alamat   = '$alamat',
                                                no_hp    = '$no_hp'
                                            WHERE no_reg = '$id'");

    echo "<div class='alert alert-success alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                Data Pendaftar Berhasil Diubah. <a class='alert-link' href='?p=data.views'> Back</a></div>";
    }
    
    // TAMPIL SAKBARE NGAPDEATH
    $sql  = mysqli_query($conn, "SELECT * from tb_biodata WHERE no_reg='$get_id'");
    $data = mysqli_fetch_array($sql);

?>

<div class="row"> 
    <div class="col-lg-12">   
        <div class="panel panel-primary">
            <div class="panel-heading"></div>  
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                               
                    <form class="form-horizontal" style="margin-top: 20px;" id="defaultForm" method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $get_id; ?>">                 
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Nomor Pendaftaran</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="<?php echo $data['no_reg']; ?>" readonly/>
                            </div>
                        </div><br/>              
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" />
                            </div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Tempat, Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="tmp_lhr" value="<?php echo $data['tmp_lhr']; ?>" />
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="tgl" id="tgl" value="<?php echo date_format(date_create($data['tgl']), 'd-m-Y'); ?>"/>
                            </div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Jenis Kelamin</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="jk" />
                                <option value="<?php echo $data['jk']; ?>"><?php echo $data['jk']; ?></option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                                </select>      
                            </div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Asal Sekolah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="as_sklh" value="<?php echo $data['as_sklh']; ?>" />
                            </div>
                        </div><hr style="width:120%;">
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> NILAI UNAS</label>
                            <div class="col-sm-8"></div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Bahasa Indonesia</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="bin" id="bin" maxlength="5" onBlur="angka(this);" onKeyUp="angka(this);" value="<?php echo $data['bin']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Bahasa Inggris</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="big" id="big" maxlength="5" onBlur="angka(this);" onKeyUp="angka(this);" value="<?php echo $data['big']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Matematika</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="mat" id="mat" maxlength="5" onBlur="angka(this);" onKeyUp="angka(this);" value="<?php echo $data['mat']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> IPA</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="ipa" id="ipa" maxlength="5" onBlur="angka(this);" onKeyUp="angka(this);" value="<?php echo $data['ipa']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Jumlah Nilai</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="jmlnilai" id="jmlnilai" value="<?php echo $data['jmlnilai']; ?>" style="background-color: #ffffff" readonly />
                            </div>
                        </div><hr style="width:120%;"><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Nama Orang Tua</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ortu" value="<?php echo $data['ortu']; ?>" />
                            </div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Alamat Rumah</label>
                            <div class="col-sm-7"></div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> RT</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="rt" maxlength="2" onkeypress="return number(event)" value="<?php echo $data['rt']; ?>" required/>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> RW</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="rw" maxlength="2" onkeypress="return number(event)" value="<?php echo $data['rw']; ?>" required/>
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Desa, Kecamatan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="alamat" rows="3" /><?php echo $data['alamat']; ?></textarea>
                            </div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"> Nomor HP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" pattern="[0-9]{12,12}" name="no_hp" onkeypress="return number(event)" value="<?php echo $data['no_hp']; ?>" maxlength="12" />
                            </div>
                        </div><br/>
                        <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-8">                                  
                            <button type="submit" name="edit" class="btn btn-primary"> Save</button>
                            <a href="?p=data.views" class="btn btn-default"> Cancel</a>
                            </div>
                        </div>                        
                    </form>                
                </div>                          
            </div>
        </div>
    </div>
</div>


<script>
// DATEPICKER
$(document).ready(function() {
    $('#tgl').datepicker({
        //dateFormat: "dd/MM/yy",
        //autoclose:true
        changeMonth: true,
        yearRange: "-30:+0",
        format: "dd-mm-yyyy",
        changeYear: true
        });
    });
</script>

<script>
/* FORMAT ANGKA 2 TITIK BELAKANG KOMA */
function angka(objek) {
    objek = typeof(objek) != 'undefined' ? objek : 0;
    a = objek.value;
    b = a.replace(/[^\d]/g,"");
    c = "";
    panjang = b.length;
    j = 0;
    for (i = panjang; i > 0; i--) {
    j = j + 1;
    if (((j % 2) == 1) && (j != 1)) {
    c = b.substr(i-1,1) + "." + c;
    } else {
    c = b.substr(i-1,1) + c;
    }
}
/* AUTOSUM */
    objek.value = c;
    var bin=document.getElementById('bin').value;
    var big=document.getElementById('big').value;
    var mat=document.getElementById('mat').value;
    var ipa=document.getElementById('ipa').value;
            
    var jmlnilai = (parseFloat(bin) + parseFloat(big) + parseFloat(mat) + parseFloat(ipa));
    var h = jmlnilai.toFixed(2);
    document.getElementById("jmlnilai").value = h;
}
</script>

<script>
// VALIDASI INPUTAN ANGKA
function number(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
    return true;
}
</script>