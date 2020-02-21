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

    /**
     * CodeHighlight constructor.
     * Constructor takes 3 classes that implement the interfaces below
     * @param TokenizerInterface $tokenizer
     * @param ClasifierInterface $clasifier
     * @param AssemblerInterface $assembler
     */
    public function __construct(
        TokenizerInterface $tokenizer,
        ClasifierInterface $clasifier,
        AssemblerInterface $assembler
    )
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
        $this->assembler = $assembler;
    }

    /**
     * highlight() takes a string with a given pattern and returns a string with the same text injected with
     * html span tags
     * @param string $string
     * @return string
     */
    public function highlight(string $string): string
    {
        $words = $this->tokenizer->tokenize($string);

        $tokens = array();
        foreach ($words as $token) {
            $tokens[] = $this->clasifier->clasify($token);
        }

        return $this->assembler->assemble($tokens);;
    }
}
