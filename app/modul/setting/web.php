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
        <h3 class="page-header"> Setting Web</h3>
    </div>
</div>

<?php

    $sql  = mysqli_query($conn, "SELECT * FROM tb_post");
    $data = mysqli_fetch_assoc($sql);
    $post_status   = $data['post_status'];
    $post_postdate = $data['post_postdate'];

    //true false
    if ($post_status == "true")
        {
        $post_status = "Aktif";
        }
    else
        {
        $post_status = "Tidak Aktif";
        }

    //null postdate
    if (empty($post_postdate))
        {
        $post_postdate = "-";
    }
?>

<div class="alert alert-info alert-dismissable"><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button> Jika Status Tidak Aktif Maka Pendaftaran Dibuka & Pengumuman Ditutup. Jika Status Aktif Maka Pendaftaran Ditutup & Pengumuman Dibuka.</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading"></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="defaultForm" style="margin-top: 20px;" action="?p=setting.action" id="defaultForm" method="post" enctype="multipart/form-data">
                            <div class="row show-grid">
                                <div class="col-md-3" style="padding-left:50px;"><b> Status</b></div>
                                <div class="col-md-3">
                                    <select class="form-control" name="post_status" required/>
                                        <option value="<?php echo $post_status ?>"><?php echo $post_status; ?></option>
                                        <option value="true">Aktif</option>
                                        <option value="false">Tidak Aktif</option>
                                    </select>      
                                </div>
                                <div class="col-md-3" style="padding-left:50px;"><b> Terhitung Sejak</b></div>
                                <div class="col-md-3"><b><?php echo date_format(date_create($data['post_postdate']), 'd-m-Y H:i:s'); ?></b></div>
                            </div>
                                                  
                                <div class="pull-right">       
                                    <button type="submit" name="web" class="btn btn-primary"> Save</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
