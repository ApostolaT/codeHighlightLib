<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class BuiltinToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"builtin\">".$this->getText()."</span>";
    }
}