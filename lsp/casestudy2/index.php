<?php

require_once('Mobil.php');
require_once('MobilListrik.php');

$mobil = new Mobil();
$mobil->menggunakanBahanBakar('BBM');
$mobil->menggunakanBBM();

$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBahanBakar('listrik');
$mobilListrik->menggunakanBaterai();
