<?php

namespace HighlightLib\Tokenizer;

use HighlightLib\Contracts\TokenizerInterface;

class Tokenizer implements TokenizerInterface
{
    public function __construct() {

    }

    public function tokenize(string $in): array
    {
        $pattern = "/ /";
        return preg_split($pattern, $in);
    }
}