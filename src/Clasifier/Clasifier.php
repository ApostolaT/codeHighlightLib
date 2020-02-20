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

    public function clasify(string $stringToken): TokenInterface
    {
        foreach ($this->configuration as $key => $value) {
            if (preg_match($key, $stringToken))
                return new $value;
        }
    return new WhiteSpaceToken();
    }
}