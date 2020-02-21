<?php

namespace HighlightLib\Token;

class PunctuationToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"punctuation\">".$this->getText()."</span>";
    }
}