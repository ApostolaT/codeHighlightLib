<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class WhiteSpaceToken extends AbstractToken
{
    public function getCss(): string {
        return $this->getText();
    }
}