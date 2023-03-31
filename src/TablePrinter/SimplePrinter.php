<?php

namespace App\TablePrinter;

use App\Table\TableInterface;

class SimplePrinter implements PrinterInterface
{
    public function print(TableInterface $table): string
    {
        return implode(
            "\n",
            array_map(static fn(array $line) => implode(' ', $line), $table->getData())
        );
    }
}