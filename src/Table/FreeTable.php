<?php

namespace App\Table;

class FreeTable implements TableInterface
{
    /**
     * @var string[][]
     */
    private array $data;

    /**
     * @param string[][] $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }
}