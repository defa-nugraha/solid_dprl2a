<?php

require_once 'Mahasiswa.php';
require_once 'MahasiswaView.php';

$mahasiswa = new Mahasiswa("A12345", "Budi");
$mahasiswaView = new MahasiswaView($mahasiswa);

$mahasiswaView->showMahasiswa();
