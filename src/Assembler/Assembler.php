<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{
    public function ___construct() {

    }

    public function assemble(array $tokens): string
    {
//        print_r($tokens[0]);
//        echo "<br>";
        $array = $tokens[1];
//        print_r($array);
        $len = count($tokens[0]);
        $index = 0;
        foreach ($array as $key => $value) {
            if ($value->getCss() != "")
                echo $value->getCss().$tokens[0][$index]."</span>"." ";
            else
                echo $tokens[0][$index]." ";
            $index++;
        }

        return null;
    }
}