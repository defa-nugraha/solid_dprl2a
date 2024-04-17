<?php

require_once 'Persegi.php';
require_once 'PenghitungPersegi.php';

$persegi = new Persegi(5);
$penghitungPersegi = new PenghitungPersegi($persegi);

echo "Luas persegi: " . $penghitungPersegi->hitungLuas();
