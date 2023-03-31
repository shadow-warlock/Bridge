<?php

use App\CashRegister\DayCashRegister;
use App\CashRegister\OperationType;
use App\Table\DayCashTable;
use App\Table\FreeTable;
use App\TablePrinter\HtmlPrinter;
use App\TablePrinter\JsonPrinter;
use App\TablePrinter\SimplePrinter;

spl_autoload_register(static function ($class_name) {
    include __DIR__ . '/src/' . str_replace("\\", "/", substr($class_name, 4)) . '.php';
});
$FreeTable = new FreeTable([['Супер свободная таблица', 'сейчас будем ее печатать'], ['Вот так вот', 'да']]);

echo "FreeTable:\n";
echo "HTML:\n";
echo (new HtmlPrinter())->print($FreeTable);
echo "\n\n\n";

echo "JSON:\n";
echo (new JsonPrinter())->print($FreeTable);
echo "\n\n\n";

echo "Simple:\n";
echo (new SimplePrinter())->print($FreeTable);
echo "\n\n\n";

echo "\n\n\n";

$cashRegister = new DayCashRegister(1000);
$cashRegister->addOperation(OperationType::INCOME, 5000);
$cashRegister->addOperation(OperationType::INCOME, 100);
$cashRegister->addOperation(OperationType::CONSUMPTION, 700);
$cashRegister->addOperation(OperationType::CONSUMPTION, 200);
$cashRegister->addOperation(OperationType::INCOME, 2000);
$cashTable = new DayCashTable($cashRegister);

echo "CashTable:\n";
echo "HTML:\n";
echo (new HtmlPrinter())->print($cashTable);
echo "\n\n\n";

echo "JSON:\n";
echo (new JsonPrinter())->print($cashTable);
echo "\n\n\n";

echo "Simple:\n";
echo (new SimplePrinter())->print($cashTable);
echo "\n\n\n";