<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class NewlineToken
 * @package HighlightLib\Token
 */
class NewlineToken extends AbstractToken
{

    public function getCss(): string {
        return PHP_EOL;
    }
}