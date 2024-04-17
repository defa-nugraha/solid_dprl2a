<?php

require_once('FlagshipPrinter.php');
require_once('EntryLevelPrinter.php');
require_once('MidRangePrinter.php');

$flagshipPrinter = new FlagshipPrinter();
$flagshipPrinter->printDocument();
$flagshipPrinter->receiveFax();
$flagshipPrinter->scanDocument();

$entryLevelPrinter = new EntryLevelPrinter();
$entryLevelPrinter->printDocument();

$midRangePrinter = new MidRangePrinter();
$midRangePrinter->printDocument();
$midRangePrinter->scanDocument();
