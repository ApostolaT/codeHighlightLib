<?php

namespace HighlightLib\Token;

class VariableToken extends AbstractToken
{
    public function getCss(): string {
            return "<span class=\"variable\">".$this->getText()."</span>";
    }
}