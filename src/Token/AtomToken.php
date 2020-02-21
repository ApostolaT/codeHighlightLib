<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class AtomToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"atom\">".$this->getText()."</span>";
    }
}