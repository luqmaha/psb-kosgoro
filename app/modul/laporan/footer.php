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

    $sql = mysqli_query($conn, "SELECT * FROM tb_sekolah");
    $row = mysqli_fetch_assoc($sql);

    $query = mysqli_query($conn, "SELECT *FROM tb_user");
    $data  = mysqli_fetch_assoc($query);

?>

<table align="left" style='font-family: "Times New Roman"; font-size: 16px;'>
    <tr>
        <td>Mengetahui,</td>
    </tr>
    <tr>
        <td>Kepala <?php echo $row['sek_nama']; ?></td>
    </tr>
    <tr>
        <td style="padding-top:70px;"><b><u><?php echo $row['sek_kepsek']; ?></u><br><?php echo $row['sek_nip']; ?></b></td>
    </tr>
</table>

<table align="right" style='font-family: "Times New Roman"; font-size: 16px;'>  
    <tr>
        <td><?php echo $row['sek_kab']; ?>, <?php echo "".$tgl_skrg." ".$nama_bln[$bln_sekarang]." ".$thn_sekarang."" ?></td>
    </tr>
    <tr>
        <td>Panitia PSB</td>
    </tr>
    <tr>
        <td style="padding-top:70px;"><b><u><?php echo $data['usr_nama']; ?></u><br/><?php echo $data['usr_nip']; ?></b></td>
    </tr>
</table>