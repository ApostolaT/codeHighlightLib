<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class NewlineToken implements TokenInterface
{

    public function getCss(): string {
        return "<br>";
    }
}