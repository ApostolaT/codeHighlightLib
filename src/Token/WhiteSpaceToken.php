<?php

namespace HighlightLib\Token;

class WhiteSpaceToken extends AbstractToken
{
    public function getCss(): string {
        return $this->getText();
    }
}