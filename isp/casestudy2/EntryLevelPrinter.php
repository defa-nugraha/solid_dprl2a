<?php

require_once('Printer.php');

class EntryLevelPrinter implements Printer
{
    public function printDocument(): void
    {
        echo "Mencetak dokumen...<br/>";
    }
}
