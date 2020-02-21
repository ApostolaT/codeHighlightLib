<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\SpacePrinter\SpacePrinter;

/**
 * @inheritDoc
 * Class Assembler
 * @package HighlightLib\Assembler
 */
class Assembler implements AssemblerInterface
{
    public function assemble(array $tokens): string
    {
        $spacePrinter = new SpacePrinter();
        $index = 0;
        $string = "";
        foreach ($tokens as $token) {
            $string .= $spacePrinter->printSpaces($tokens, $index);
            $string .= $token->getCss();
            $index++;
        }

        return $string;
    }
}