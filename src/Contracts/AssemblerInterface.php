<?php

declare(strict_types=1);
namespace HighlightLib\Contracts;

/**
 * Interface AssemblerInterface
 * Function assemble() takes an array of objects and assembles
 * the objects by their span tags and texts corespondent to
 * the object
 * @package HighlightLib\Contracts
 */
interface AssemblerInterface {
    public function assemble(array $tokens): string;
}
