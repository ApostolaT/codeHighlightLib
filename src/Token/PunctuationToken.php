<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class PunctuationToken implements TokenInterface
{
    public function getCss(): string {
        return "<span class=\"punctuation\">";
    }
}