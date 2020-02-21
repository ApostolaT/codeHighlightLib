<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class BracketToken implements TokenInterface
{
    public function getCss(): string {
        return "<span class=\"bracket\">";
    }
}