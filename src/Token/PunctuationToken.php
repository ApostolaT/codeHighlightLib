<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class PunctuationToken
 * @package HighlightLib\Token
 */
class PunctuationToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"punctuation\">".$this->getText()."</span>";
    }
}