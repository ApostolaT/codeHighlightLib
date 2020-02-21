<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class PunctuationToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"punctuation\">".$this->getText()."</span>";
    }
}