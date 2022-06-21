<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASSCODE","");
    define("DBNAME","");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASSCODE) or die("Koneksi ke DBMS MySQL GAGAL<br>");