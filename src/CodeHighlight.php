<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenizerInterface;

class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
        $this->assembler = $assembler;
    }

    public function highlight(string $string): string
    {
        $words = $this->tokenizer->tokenize($string);

        $tokens = array();
        foreach ($words as $token) {
            $tokens[] = $this->clasifier->clasify($token[0]);
        }

        $wordsAndTokens = array();
        $wordsAndTokens[] = $words;
        $wordsAndTokens[] = $tokens;

        $this->assembler->assemble($wordsAndTokens);

        return $string;
    }
}
