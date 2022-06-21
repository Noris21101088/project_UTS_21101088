<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO pemesanan (kode_penyewaan, nama, alamat, barang, start_sewa, close_sewa, DP, total_bayar, pembayaran) 
    VALUES('".$pdata["KODE"]."', '".$pdata["NAMA"]."', '".$pdata["ALAMAT"]."', '".$pdata["BARANG"]."', '".$pdata["START"]."', '".$pdata["CLOSE"]."', '".$pdata["DP"]."', '".$pdata["TOTAL"]."', '".$pdata["PEMBAYARAN"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE penyewaan SET
        kode_penyewaan = '".$pdata["KODE2"]."',
        nama = '".$pdata["NAMA"]."',
        alamat = '".$pdata["ALAMAT"]."',
        barang = '".$pdata["BARANG"]."',
        start_sewa = '".$pdata["START"]."',
        close_sewa = '".$pdata["CLOSE"]."',
        DP = '".$pdata["DP"]."',
        total_bayar = '".$pdata["TOTAL"]."',
        pembayaran = '".$pdata["PEMBAYARAN"]."'
        WHERE kode_penyewaan = '".$pdata["KODE1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}

function tampildata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM penyewaan;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $i = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$i.'</td>
        <td class="text-center">'.$h["kode_penyewaan"].'</td>
        <td class="text-center">'.$h["nama"].'</td>
        <td class="text-center">'.$h["alamat"].'</td>
        <td class="text-center">'.$h["barang"].'</td>
        <td class="text-center">'.$h["start_sewa"].'</td>
        <td class="text-center">'.$h["close_sewa"].'</td>
        <td class="text-center">'.$h["DP"].'</td>
        <td class="text-center">'.$h["total_bayar"].'</td>
        <td class="text-center">'.$h["pembayaran"].'</td>
        <td class = "text-center">
            <a class="btn btn-primary px-3 fw-bold" href="edit.php?kode='.$h["kode_penyewaan"].'">Edit</a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?kode='.$h["kode_penyewaan"].'" onClick=\'return confirm("Hapus Data?");\'>Delete</a>
        </td>
    </tr>';
    $i++;
    }
    return $hsl1;
}