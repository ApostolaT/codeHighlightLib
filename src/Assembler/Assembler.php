<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{
    public function assemble(array $tokens): string
    {
        $index = 0;
        foreach ($tokens[1] as $key => $value) {
            if ($index != 0) {
                $offset = $tokens[0][$index][1];
                $length = $tokens[0][$index-1][1] + strlen($tokens[0][$index-1][0]);
                $spaceNumber =  $offset - $length;
                while ($spaceNumber != 0) {echo " "; $spaceNumber--;}
            }

            $css = $value->getCss();
            if ($css !== "" && $css !== "<br>")
                echo $css.$tokens[0][$index][0]."</span>";
            else
                echo $css.$tokens[0][$index][0];
            $index++;
        }

        return null;
    }
}