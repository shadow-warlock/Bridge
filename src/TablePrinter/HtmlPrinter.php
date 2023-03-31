<?php

namespace App\TablePrinter;

use App\Table\TableInterface;

class HtmlPrinter implements PrinterInterface
{
    public function print(TableInterface $table): string
    {
        return sprintf(
            '<table>%s</table>',
            implode(
                '',
                array_map(
                    static fn($line) => sprintf(
                        '<tr>%s</tr>',
                        implode(
                            '',
                            array_map(
                                static fn($cell) => sprintf('<td>%s</td>', $cell),
                                $line
                            )
                        )
                    ),
                    $table->getData()
                )
            )
        );
    }
}