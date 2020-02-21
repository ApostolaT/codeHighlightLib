<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class VariableToken extends AbstractToken
{
    public function getCss(): string {
            return "<span class=\"variable\">".$this->getText()."</span>";
    }
}