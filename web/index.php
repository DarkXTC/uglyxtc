<?php
use \UglyXTC\Controller\PageController;
/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */
require_once dirname(__FILE__).'/../vendor/autoload.php';
$controller;
if(isset($_GET['page'])) {
    die(var_dump($_GET));
    $controller = new PageController($_GET['page']);
} else {
    $controller = new PageController("index");
}
$controller->handleRequest();