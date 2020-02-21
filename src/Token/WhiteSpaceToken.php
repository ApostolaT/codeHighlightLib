<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class WhiteSpaceToken
 * @package HighlightLib\Token
 */
class WhiteSpaceToken extends AbstractToken
{
    public function getCss(): string {
        return $this->getText();
    }
}