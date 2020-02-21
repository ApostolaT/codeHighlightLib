<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class BracketToken
 * @package HighlightLib\Token
 */
class BracketToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"bracket\">".$this->getText()."</span>";
    }
}