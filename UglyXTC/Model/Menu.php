<?php
namespace UglyXTC\Model;
use UglyXTC\Core\Config;
use UglyXTC\Model\MenuEntry;
/*
 * The MIT License (MIT)
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of Menu
 *
 * @author darkxtc
 */
class Menu {
    private $menuEntries;
    public function __construct() {
        $this->fillMenuArray();
    }
    
    private function fillMenuArray() {
        $this->menuEntries = array();
        $pdo = Config::getPDOConnection();
        $result = $pdo->query("SELECT link, name, alt, external FROM MenuLinks");
        $entries = $result->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($entries as $entry) {
            array_push($this->menuEntries, new MenuEntry(
                                                            $entry['link'], 
                                                            $entry['name'], 
                                                            $entry['alt'], 
                                                            $entry['external']
                                                        ));
        }
    }
    /**
     * 
     * @return MenuEntry[]
     */
    public function getMenuEntries() {
        if(!isset($this->menuEntries)) {
            $this->fillMenuArray();
        }
        return $this->menuEntries;
    }
}
