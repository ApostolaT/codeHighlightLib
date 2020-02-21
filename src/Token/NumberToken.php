<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class NumberToken
 * @package HighlightLib\Token
 */
class NumberToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"number\">".$this->getText()."</span>";
    }
}