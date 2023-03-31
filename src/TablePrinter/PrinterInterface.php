<?php

namespace App\TablePrinter;

use App\Table\TableInterface;

interface PrinterInterface
{
    public function print(TableInterface $table): string;
}