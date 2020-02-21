<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{
    public function assemble(array $tokens): string
    {
        $index = 0;
        foreach ($tokens[1] as $key => $value) {
            if ($value->getCss() !== "" && $value->getCss() !== "<br>")
                echo $value->getCss().$tokens[0][$index]."</span>";
            else
                echo $value->getCss().$tokens[0][$index];
            $index++;
            echo " ";
        }

        return null;
    }
}