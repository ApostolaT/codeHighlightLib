<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class KeywordToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"keyword\">".$this->getText()."</span>";
    }
}