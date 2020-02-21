<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

class BuiltinToken implements TokenInterface
{
    public function getCss(): string {
        return "<span class=\"builtin\">";
    }
}