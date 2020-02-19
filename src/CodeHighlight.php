<?php

declare(strict_types=1);
namespace HighlightLib;

class CodeHighlight
{
    private $tok;
    private $classif;
    private $ass;

    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier, AssemblerInterface $assembler)
    {
        // ^\$[^0-9](?:\w+)*(?:_)*$ variable regex sau ^\$[^0-9][a-zA-Z_)]\w+$
    }

    //in constructor build tokenizer
    public function highlight(string $string): string
    {
        // use the defined classes/services to perform the highlighting on $string
        $string = "Lib";
        return $string;
    }
}
