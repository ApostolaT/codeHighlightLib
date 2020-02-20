<?php

namespace HighlightLib\Clasifier;

use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Token\WhiteSpaceToken;

class Clasifier implements ClasifierInterface
{
    public function __construct() {

    }

    public function clasify(string $stringToken, array $configurationArray): TokenInterface
    {
        foreach ($configurationArray as $key => $value) {
            if (preg_match($key, $stringToken))
                return new $value;
        }
    return new WhiteSpaceToken();
    }
}