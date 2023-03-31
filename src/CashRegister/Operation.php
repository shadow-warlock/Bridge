<?php

namespace App\CashRegister;

use DateTimeImmutable;

class Operation
{
    private OperationType $type;
    private int $value;
    private DateTimeImmutable $time;

    /**
     * @param OperationType $type - true income, false - consumption
     * @param int $value
     * @param DateTimeImmutable $time
     */
    public function __construct(OperationType $type, int $value, DateTimeImmutable $time)
    {
        $this->type = $type;
        $this->value = $value;
        $this->time = $time;
    }

    public function getType(): OperationType
    {
        return $this->type;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getTime(): DateTimeImmutable
    {
        return $this->time;
    }

}