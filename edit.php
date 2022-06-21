<?php

    if(isset($_GET["kode"])){
        include_once("koneksi2.php");
        $kode = $_GET["kode"];
        $sql = "SELECT * FROM penyewaan WHERE kode_penyewaan='".$kode."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txSIMPAN"])){
        $pdata["KODE1"] = $_POST["txKODELAMA"];
        $pdata["KODE2"] = $_POST["txKODE"];
        $pdata["NAMA"] = $_POST["txNAMA"];
        $pdata["ALAMAT"] = $_POST["txALAMAT"];
        $pdata["BARANG"] = $_POST["txBARANG"];
        $pdata["START"] = $_POST["txSTART"];
        $pdata["CLOSE"] = $_POST["txCLOSE"];
        $pdata["DP"]= $_POST["txDP"];
        $pdata["TOTAL"] = $_POST["txTOTAL"];
        $pdata["PEMBAYARAN"]= $_POST["txPEMBAYARAN"];

        include_once("crud.php");
        updatedata($pdata);
        header("location:tampildata.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tabel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-2 fw-bold ">Edit Data Tabel Sewa Dekorasi</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="txKODELAMA" value="<?=$h['kode_penyewaan'];?>">
            KODE PENYEWAAN
            <div>
                 <input type="text" class="form-control form-control" name="txKODE" value="<?=$h["kode_penyewaan"];?>">
            </div>        
            NAMA
            <div>
                <input type="text" class="form-control form-control" name="txNAMA" value="<?=$h["nama"];?>">
            </div>
            ALAMAT
            <div>
                <input type="text" class="form-control form-control" name="txALAMAT" value="<?=$h["alamat"];?>">
            </div>
            BARANG
            <div>
                <input type="text" class="form-control form-control" name="txBARANG" value="<?=$h["barang"];?>">
            </div>
            START SEWA
            <div>
                <input type="text" class="form-control form-control" name="txCEKIN" value="<?=$h["start_sewa"];?>">
            </div>
            CLOSE SEWA
            <div>
                <input type="text" class="form-control form-control" name="txCEKOUT" value="<?=$h["close_sewa"];?>">
            </div>
            DP
            <div>
                <input type="text" class="form-control form-control" name="txDP" value="<?=$h["DP"];?>">
            </div>
            TOTAL BAYAR
            <div>
                <input type="text" class="form-control form-control"  name="txTOTAL" value="<?=$h["total_bayar"];?>">
            </div>
            PEMBAYARAN
            <div>
                <select name="txPEMBAYARAN" class="form-select">
                    <option value="LUNAS">Lunas</option>
                    <option value="BELUM LUNAS">Belum Lunas</option>
                </select>  
            </div>
            <br>
            <button type="submit" class="btn btn-success" name="txSIMPAN">Save</button>  
            <a href="tampildata.php" class="btn btn-danger ms-3">Back</a>
                 
        </form>
    </div>
</body>
</html>
