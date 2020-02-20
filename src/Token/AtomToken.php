<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class AtomToken implements TokenInterface
{

    public function getCss(): string
    {
        return "<span class=\"atom\">";
    }
}