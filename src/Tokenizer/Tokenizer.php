<?php

namespace HighlightLib\Tokenizer;

use HighlightLib\Contracts\TokenizerInterface;

class Tokenizer implements TokenizerInterface
{
    public function tokenize(string $in): array
    {
        $pattern = "/ +/";
        return preg_split($pattern, $in, -1, PREG_SPLIT_OFFSET_CAPTURE);
    }
}