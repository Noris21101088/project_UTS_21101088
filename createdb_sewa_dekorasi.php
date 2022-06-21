<?php
include_once("koneksi1.php");

if($cnn){
    $sql = "CREATE DATABASE sewa_dekorasi;";

    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Database <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Database <strong>GAGAL</strong> Dibuat<br>";
    }
    mysqli_close($cnn);
}