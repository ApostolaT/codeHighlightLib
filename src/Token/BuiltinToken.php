<?php

namespace HighlightLib\Token;

class BuiltinToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"builtin\">".$this->getText()."</span>";
    }
}