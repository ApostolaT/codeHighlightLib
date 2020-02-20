<?php
require "vendor/autoload.php";

use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\Tokenizer;
use HighlightLib\Clasifier\Clasifier;
use \HighlightLib\Assembler\Assembler;
use \HighlightLib\Config\Config;

$tok = new Tokenizer();
$conf = new Config();
$clas = new Clasifier($conf->getConfigArray());
$assem = new Assembler();

$var = new CodeHighlight($tok, $clas, $assem);

echo "<html><head><link rel='stylesheet' href='style/style.css?>'></head>";
$var->highlight("for \$i = 1 to \$n do");