<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["KODE"] = $_POST["txKODE"];
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["ALAMAT"] = $_POST["txALAMAT"];
    $pdata["BARANG"] = $_POST["txBARANG"];
    $pdata["START"] = $_POST["txSTART"];
    $pdata["CLOSE"] = $_POST["txCLOSE"];
    $pdata["DP"] = $_POST["txDP"];
    $pdata["TOTAL"] = $_POST["txTOTAL"];
    $pdata["PEMBAYARAN"] = $_POST["txPEMBAYARAN"];

    include_once("crud.php");
    insertdata($pdata);
    header("location:tampildata.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="fw-bold my-4">Insert Data Tabel Penyewaan </h1>
        <form action="" method="POST">
            KODE PENYEWAAN
            <div>
                <input type="text" name="txKODE" class="form-control form-control">
            </div>
            NAMA
            <div>
                <input type="text" name="txNAMA" class="form-control form-control">
            </div>
            ALAMAT
            <div>
                <input type="text" name="txALAMAT" class="form-control form-control">
            </div>
            BARANG
            <div>
                <input type="text" name="txBARANG" class="form-control form-control">
            </div>
            START SEWA
            <div>
                <input type="date" name="txSTART" class="form-control form-control">
            </div>
            CLOSE SEWA
            <div>
                <input type="date" name="txCLOSE" class="form-control form-control">
            </div>
            DP
            <div>
                <input type="text" name="txDP" class="form-control form-control">
            </div>
            TOTAL BAYAR
            <div>
                <input type="text" name="txTOTAL" class="form-control form-control">
            </div>
            PEMBAYARAN
            <div>
                <select name="txPEMBAYARAN" class="form-select form-select">
                    <option value="LUNAS">Lunas</option>
                    <option value="BELUM LUNAS">Belum Lunas</option>
                </select>  
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-primary" name="txSIMPAN">TAMBAH</button>
            </div>
        </form>
    </div>
</body>
</html>