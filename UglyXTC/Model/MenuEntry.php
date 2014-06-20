<?php
namespace UglyXTC\Model;
use UglyXTC\Core\Config;
/*
 * The MIT License (MIT)
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of MenuEntry
 *
 * @author darkxtc
 */
class MenuEntry {
    private $link, $name, $alt;
    public function __construct($link, $name, $alt, $external = false) {
        if(!$external) {
            $link = ((!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off")?"http":"https")."://".Config::getURLBase().$link;
        }
        $this->link = $link;
        $this->name = $name;
        $this->alt = $alt;
    }
    public function getLink() {
        return $this->link;
    }

    public function getName() {
        return $this->name;
    }

    public function getAlt() {
        return $this->alt;
    }
}
