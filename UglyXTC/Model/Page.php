<?php
namespace UglyXTC\Model;

use UglyXTC\Core\Config;
use UglyXTC\Model\MetaEntry;
/*
 * The MIT License (MIT)
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of Page
 *
 * @author darkxtc
 */
class Page {
    private $title;
    private $content;
    private $metas;
    private $pageID;
    
    public function __construct($path) {
        $pdo = Config::getPDOConnection();
        $statement = $pdo->prepare("SELECT id, title, content FROM Pages WHERE path = :path");
        $statement->execute(array(':path' => $path));
        die(var_dump($path));
        if($statement->rowCount() === 0) {
            $this->title = "Nothing here";
            $this->content = "Nothing to see here. Looks like someone is playing around with the urls ;)";
            $this->pageID = -1;
        } else {
            $pageInfo = $statement->fetch(\PDO::FETCH_ASSOC);
            $this->title = $pageInfo['title'];
            $this->content = $pageInfo['content'];
            $this->pageID = $pageInfo['id'];
        }
    }
    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    private function fillMetas() {
        $this->metas = array();
        $pdo = Config::getPDOConnection();
        $statement = $pdo->prepare("SELECT name, value FROM Metas WHERE pageid = :id OR pageid = NULL");
        $statement->execute(array(':id' => $this->pageID));
        if($statement->rowCount() > 0) {
            $metaEntries = $statement->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($metaEntries as $entry) {
                array_push($this->metas, new MetaEntry($entry['name'], $entry['value']));
            }
        }
    }
    
    /**
     * 
     * @return MetaEntry[]
     */
    public function getMetas() {
        if(!isset($this->metas)) {
            $this->fillMetas();
        }
        return $this->metas;
    }
}
