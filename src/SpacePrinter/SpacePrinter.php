<?php

namespace HighlightLib\SpacePrinter;

/**
 * This function is used in Assembler object to fill in the
 * spaces between the words by the formula:
 *          offset of the current word - (offset of the precedent word + length of the precedent word)
 * Class SpacePrinter
 * @package HighlightLib\SpacePrinter
 */
class SpacePrinter
{
    public function printSpaces(array $tokenArray, int $index) : string
    {
            if ($index == 0) return "";

            $string = "";
            $offset = $tokenArray[$index]->getOffset();
            $length = $tokenArray[$index - 1]->getOffset() + strlen($tokenArray[$index - 1]->getText());
            $spacesNumber = $offset - $length;

            while ($spacesNumber > 0) {
                $string .= " ";
                $spacesNumber--;
            }

            return $string;
    }
}