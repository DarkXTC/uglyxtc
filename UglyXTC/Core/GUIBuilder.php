<?php
namespace UglyXTC\Core;
/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of GUIBuilder
 *
 * @author darkxtc
 */
class GUIBuilder {
    private $values;
    public function __construct() {
        $this->values = array('meta' => "", 'menu' => "");
    }
    
    public function __set($name, $value) {
        $this->values[$name] = $value;
    }
    
    public function __get($name) {
        return $this->values[$name];
    }
    
    public function show($template) {
        $values = $this->values;
        include dirname(__FILE__) . "/../../templates/$template.php";
    }
    public function addMeta($name, $value) {
        $this->values['meta'] .= "<meta name=\"$name\" value=\"$value\" />\n";
    }
    public function addMenuLink($link, $name, $alt) {
        $this->values['menu'] .= "<li><a href=\"$link\" alt=\"$alt\">$name</a></li>\n";
    }
}
