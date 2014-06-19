<?php
use Michelf\Markdown;
/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */
require_once './vendor/autoload.php';
$guibuilder = new UglyXTC\Core\GUIBuilder();
$guibuilder->title = "miau";
$text = "**Miez** macht die _Miez_";
for($i = 0; $i < 200; $i++) {
    $text .= "**Miez** macht die _Miez_";
}
$guibuilder->content = Markdown::defaultTransform($text);
$guibuilder->show("Main");