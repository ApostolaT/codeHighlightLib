<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class BracketToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"bracket\">".$this->getText()."</span>";
    }
}