<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Config\Config;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenizerInterface;

class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
//    private $assembler;

//, ClasifierInterface $clasifier, AssemblerInterface $assembler
    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
    }

    //in constructor build tokenizer
    public function highlight(string $string): string
    {
        $config = new Config();
        $words = $this->tokenizer->tokenize($string);
        $tokens = array();
        foreach ($words as $value) {
            $tokens[] = $this->clasifier->clasify($value, $config->getConfigArray());
        }
        print_r($words);
        echo "\n";
        print_r($tokens);

        return $string;
    }
}
