<?php

require_once('Lampu.php');
require_once('KipasAngin.php');
require_once('Saklar.php');

$lampu = new Lampu();
$kipasAngin = new KipasAngin();

$saklarLampu = new Saklar($lampu);
$saklarLampu->nyalakan();
$saklarLampu->matikan();

$saklarKipasAngin = new Saklar($kipasAngin);
$saklarKipasAngin->nyalakan();
$saklarKipasAngin->matikan();
