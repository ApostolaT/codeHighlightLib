<?php

namespace HighlightLib\Token;

/**
 * @inheritDoc
 * Class BuiltinToken
 * @package HighlightLib\Token
 */
class BuiltinToken extends AbstractToken
{
    public function getCss(): string {
        return "<span class=\"builtin\">".$this->getText()."</span>";
    }
}