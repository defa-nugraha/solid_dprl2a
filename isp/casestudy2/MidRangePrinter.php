<?php

require_once('Printer.php');
require_once('ScanPrinter.php');

class MidRangePrinter implements Printer, ScanPrinter
{
    public function printDocument(): void
    {
        echo "Mencetak dokumen...<br/>";
    }

    public function scanDocument(): void
    {
        echo "Memindai dokumen...<br/>";
    }
}
