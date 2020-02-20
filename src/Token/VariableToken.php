<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class VariableToken implements TokenInterface
{

    public function getCss(): string
    {
        return "<span class=\"variable\">";
    }
}