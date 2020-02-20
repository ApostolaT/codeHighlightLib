<?php
require "vendor/autoload.php";

use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\Tokenizer;
use HighlightLib\Clasifier\Clasifier;
use HighlightLib\Config\Config;

$tok = new Tokenizer();
$clas = new Clasifier();

$var = new CodeHighlight($tok, $clas);
$var->highlight("");