<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Config\Config;
use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenizerInterface;

class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

//, ClasifierInterface $clasifier, AssemblerInterface $assembler
    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
        $this->assembler = $assembler;
    }

    //in constructor build tokenizer
    public function highlight(string $string): string
    {
        $words = $this->tokenizer->tokenize($string);
        $tokens = array();
        foreach ($words as $value) {
            $tokens[] = $this->clasifier->clasify($value);
        }

        $wordsAndTokens = array();
        $wordsAndTokens[] = $words;
        $wordsAndTokens[] = $tokens;

        $this->assembler->assemble($wordsAndTokens);

        return $string;
    }
}
