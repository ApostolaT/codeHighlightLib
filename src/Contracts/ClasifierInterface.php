<?php

declare(strict_types=1);
namespace HighlightLib\Contracts;

/**
 * Interface ClasifierInterface
 * Function clasify() takes an array of ["string", integer] and makes tokens out of this arrays
 * @package HighlightLib\Contracts
 */
interface ClasifierInterface
{
    public function clasify(array $stringToken): TokenInterface;
}
