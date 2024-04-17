<?php

require_once 'Koneksi.php';
require_once 'KoneksiMySQL.php';
require_once 'KoneksiMongoDB.php';
require_once 'DBMSConnection.php';

$tipeKoneksi = "mysql";

if ($tipeKoneksi == "mysql") {
    $koneksi = new KoneksiMySQL("localhost", "root", "", "db_ecommerce");
} elseif ($tipeKoneksi == "mongodb") {
    $koneksi = new KoneksiMongoDB("mongodb://localhost:27017");
} else {
    echo "Tipe koneksi tidak sesuai!!!" . "<br>";
    exit;
}

$dbms = new DBMSConnection($koneksi);
$dbms->lakukanOperasiDatabase();
