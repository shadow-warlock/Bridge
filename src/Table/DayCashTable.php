<?php

namespace App\Table;

use App\CashRegister\DayCashRegister;

class DayCashTable implements TableInterface
{
    private array $data;

    public function __construct(DayCashRegister $cashRegister)
    {
        $this->data[] = ['Day', $cashRegister->getDay()->format('d.m.Y')];
        $this->data[] = ['Start balance', $cashRegister->getStartBalance()];
        foreach ($cashRegister->getOperations() as $operation) {
            $this->data[] = [
                $operation->getTime()->format('H:i:s'),
                $operation->getType()->value,
                $operation->getValue()
            ];
        }
        $this->data[] = ['Summary', $cashRegister->getBalance()];
    }

    public function getData(): array
    {
        return $this->data;
    }
}