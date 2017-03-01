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

?>

<br/>
<table width='100%' style='font-family: "Arial"; font-size: 2%;'> 
    <td width='100'><img src='dist/logo.jpg' width='75' height='95' align='center'></td>
        <td align='center'>
            <font size='2'><b>YAYASAN PENDIDIKAN SERBAGUNA</b></font><br/>
            <font size='5'><b>SMK KOSGORO NGANJUK</b></font><br/>
            <font size='2'><b>BIDANG KEAHLIAN: 1. BISNIS DAN MANAJEMEN, 2. TEKNOLOGI INFORMASI DAN KOMUNIKASI<br>STATUS : TERAKREDITASI "A"</b></font><br/>
            <font size='2'><b>Alamat : <?php echo $row['sek_alamat']; ?> Telp.<?php echo $row['sek_telp']; ?> <?php echo $row['sek_kab']; ?> <?php echo $row['sek_kodepos']; ?></b></font>
        </td>
    <td width='100'><img src='dist/nganjuk.jpg' width='70' height='90' align='right'></td>
</table>
<hr style='border: double; align:center;'>