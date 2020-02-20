<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class NumberToken implements TokenInterface
{

    public function getCss(): string
    {
        return "<span class=\"number\">";
    }
}