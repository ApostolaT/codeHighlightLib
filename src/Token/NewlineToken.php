<?php

namespace HighlightLib\Token;

class NewlineToken extends AbstractToken
{

    public function getCss(): string {
        return PHP_EOL;
    }
}