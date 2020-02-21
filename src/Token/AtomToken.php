<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class AtomToken
 * @package HighlightLib\Token
 */
class AtomToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"atom\">".$this->getText()."</span>";
    }
}