<?php

namespace HighlightLib\SpacePrinter;

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