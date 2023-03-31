<?php

namespace App\CashRegister;

enum OperationType: string
{
    case INCOME = 'INCOME';
    case CONSUMPTION = 'CONSUMPTION';
}
