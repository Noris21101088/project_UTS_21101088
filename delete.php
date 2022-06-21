<?php
    include_once("koneksi2.php");
    
    if(isset($_GET["kode"])){
        $sql = "DELETE FROM penyewaan WHERE kode_penyewaan = '".$_GET["kode"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: tampildata.php");