<?php

namespace HighlightLib\Token;

class AtomToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"atom\">".$this->getText()."</span>";
    }
}