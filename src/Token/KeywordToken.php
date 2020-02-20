<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class KeywordToken implements TokenInterface
{

    public function getCss(): string
    {
        return "<span class=\"keyword\">";
    }
}