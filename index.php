<?php

define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/Config/Config.php');
require "vendor/autoload.php";

use HighlightLib\CodeHighlight;
use HighlightLib\Tokenizer\Tokenizer;
use HighlightLib\Clasifier\Clasifier;
use \HighlightLib\Assembler\Assembler;

$tokenizer = new Tokenizer();
$configurator = new Config();
$clasifier = new Clasifier($configurator->getConfigArray());
$assembler = new Assembler();

$var = new CodeHighlight($tokenizer, $clasifier, $assembler);

echo "<html><meta charset='utf-8'/><title>CodeHighlighterLib</title><link rel='stylesheet' href='style/style.css?>'></head><body><pre>";
$var->highlight("func_num_args \$i = 1 to \$n do { \n     \$sum = \$n - \$i ; \n }");
echo "</pre></body>";