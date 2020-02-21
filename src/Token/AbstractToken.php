<?php

declare(strict_types=1);

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class AbstractToken
 * @package HighlightLib\Token
 */
abstract class AbstractToken implements TokenInterface
{
    private $value;
    private $offset;

    /**
     * AbstractToken constructor.
     * @param string $value
     * @param int $offset
     */
    public function __construct(string $value, int $offset)
    {
        $this->value = $value;
        $this->offset = $offset;
    }

    /**
     * returns the word associated with the current Token class
     * @return string
     */
    public function getText(): string
    {
        return $this->value;
    }

    /**
     * returns the offset of the word in the initial parsed string
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * return the complete html block with span + word associated to the current Token
     * @return string
     */
    public abstract function getCss(): string;
}