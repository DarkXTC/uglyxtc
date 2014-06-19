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
    private $menustring;
    public function __construct() {
        $this->values = array();
    }
    
    public function __set($name, $value) {
        $this->values[$name] = $value;
    }
    
    public function __get($name) {
        return $this->values[$name];
    }
    
    public function show($template) {
        $values = $this->values;
        $values['menu'] = $this->getMenuString();
        include dirname(__FILE__) . "/../../web/$template.php";
    }
    
    public function getMenuString() {
        if(!isset($this->menustring)) {
            $this->menustring = "<ul><li>link1</li></ul>\n";
        }
        return $this->menustring;
    }
}
