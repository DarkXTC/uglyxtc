<?php
namespace UglyXTC\Model;
/*
 * The MIT License (MIT)
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of MetaEntry
 *
 * @author darkxtc
 */
class MetaEntry {
    private $name, $value;
    function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }
    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }
}
