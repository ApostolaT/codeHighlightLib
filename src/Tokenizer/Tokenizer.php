<?php

namespace HighlightLib\Tokenizer;

use HighlightLib\Contracts\TokenizerInterface;

class Tokenizer implements TokenizerInterface
{
    public function __construct() {

    }

    public function tokenize(string $in): array
    {
        $pattern = "\n+| +";
        $array = preg_split($pattern, $in, PREG_SPLIT_DELIM_CAPTURE);
        return $array;
    }
}