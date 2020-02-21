<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class KeywordToken
 * @package HighlightLib\Token
 */
class KeywordToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"keyword\">".$this->getText()."</span>";
    }
}