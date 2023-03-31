<?php

namespace App\CashRegister;

use DateTimeImmutable;

class DayCashRegister
{

    private readonly int $startBalance;
    private int $balance;

    /**
     * @var Operation[]
     */
    private array $operations;

    private DateTimeImmutable $day;

    public function __construct(int $startBalance)
    {
        $this->startBalance = $startBalance;
        $this->balance = $startBalance;
        $this->day = new DateTimeImmutable();
    }

    public function addOperation(OperationType $type, int $value): int
    {
        $operation = new Operation($type, $value, new DateTimeImmutable());
        $this->operations[] = $operation;
        if ($operation->getType() === OperationType::INCOME) {
            $this->balance += $operation->getValue();
        } else {
            $this->balance -= $operation->getValue();
        }
        return $this->balance;
    }

    public function getStartBalance(): int
    {
        return $this->startBalance;
    }

    /**
     * @return Operation[]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }

    public function getDay(): DateTimeImmutable
    {
        return $this->day;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }


}