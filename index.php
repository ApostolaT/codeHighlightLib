<?php

require "vendor/autoload.php";

use HighlightLib\CodeHighlight;

$var = new CodeHighlight();

echo $var->highlight("123");
