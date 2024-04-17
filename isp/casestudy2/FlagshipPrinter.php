<?php

require_once('FaxPrinter.php');
require_once('ScanPrinter.php');

class FlagshipPrinter implements FaxPrinter, ScanPrinter
{
    public function printDocument(): void
    {
        echo "Mencetak dokumen...<br/>";
    }

    public function receiveFax(): void
    {
        echo "Menerima faks...<br/>";
    }

    public function scanDocument(): void
    {
        echo "Memindai dokumen...<br/>";
    }
}
