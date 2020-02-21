<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class NumberToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"number\">".$this->getText()."</span>";
    }
}