<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class NewlineToken extends AbstractToken
{

    public function getCss(): string {
        return PHP_EOL;
    }
}