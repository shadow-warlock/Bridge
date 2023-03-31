<?php

namespace App\TablePrinter;

use App\Table\TableInterface;

class JsonPrinter implements PrinterInterface
{
    public function print(TableInterface $table): string
    {
        return json_encode($table->getData(), JSON_THROW_ON_ERROR);
    }
}