<?php

declare(strict_types=1);
namespace HighlightLib\Contracts;

/**
 * Interface TokenizerInterface
 * Function tokenize() takes a string as an input
 * and splits it by spaces as array of words
 * @package HighlightLib\Contracts
 */
interface TokenizerInterface {
    public function tokenize(string $in): array;
}
