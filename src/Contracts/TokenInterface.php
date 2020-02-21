<?php


namespace HighlightLib\Contracts;

/**
 * Interface TokenInterface
 * Function getCss() returns a string with <span class'token'>
 * of the current TokenObject that implements the interface
 * @package HighlightLib\Contracts
 */
interface TokenInterface
{
    public function getCss(): string;
}