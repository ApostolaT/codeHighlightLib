<?php

declare(strict_types=1);

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    private $value;
    private $offset;

    public function __construct(string $value, int $offset)
    {
        $this->value = $value;
        $this->offset = $offset;
    }

    public function getText(): string
    {
        return $this->value;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public abstract function getCss(): string;
}