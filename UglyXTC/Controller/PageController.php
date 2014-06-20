<?php
namespace UglyXTC\Controller;
use UglyXTC\Model\Page;
use UglyXTC\Model\Menu;
use \UglyXTC\Core\GUIBuilder;
use Michelf\Markdown;
/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of PageController
 *
 * @author darkxtc
 */
class PageController {
    private $requestedPage;
    private $start;
    public function __construct($requestedPage) {
        $this->requestedPage = $requestedPage;
        die(var_dump($requestedPage));
        $this->start = microtime();
    }
    public function handleRequest() {
        $builder = new GUIBuilder();
        $builder->start = $this->start;
        $page = new Page($this->requestedPage);
        $menu = new Menu();
        foreach ($menu->getMenuEntries() as $menuEntry) {
            $builder->addMenuLink($menuEntry->getLink(), $menuEntry->getName(), $menuEntry->getAlt());
        }
        foreach ($page->getMetas() as $metaEntry) {
            $builder->addMeta($metaEntry->getName(), $metaEntry->getValue());
        }
        $builder->title = $page->getTitle();
        $builder->content = Markdown::defaultTransform($page->getContent());
        $builder->show("Main");
    }
}
