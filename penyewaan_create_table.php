<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE penyewaan(
    kode_penyewaan varchar(10) PRIMARY KEY, 
    nama varchar(20),
    alamat varchar(30),
    barang varchar(20),
    start_sewa date,
    close_sewa date,
    DP varchar(40),
    total_bayar varchar(40),
    pembayaran varchar(50)
);";

$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Tabel penyewaan <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel penyewaan <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($cnn);