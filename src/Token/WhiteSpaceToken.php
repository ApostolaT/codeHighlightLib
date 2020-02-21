<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class WhiteSpaceToken implements TokenInterface
{
    public function getCss(): string {
        return "";
    }
}