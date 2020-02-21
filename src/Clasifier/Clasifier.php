<?php

namespace HighlightLib\Clasifier;

use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Token\WhiteSpaceToken;

class Clasifier implements ClasifierInterface
{
    private $configuration;

    public function __construct(array $configurationArray) {
        $this->configuration = $configurationArray;
    }

    public function clasify(array $stringToken): TokenInterface
    {
        foreach ($this->configuration as $key => $value) {
            if (preg_match($key, $stringToken[0]))
                return new $value($stringToken[0], $stringToken[1]);
        }

    return new WhiteSpaceToken($stringToken[0], $stringToken[1]);
    }
}