<?php

require "vendor/autoload.php";

use HighlightLib\CodeHighlight;

$var = new CodeHighlight(HighlightLib\Tokenizer);

echo $var->highlight("Salut ce mai faci tu
hehe, nimic.");
