<?php
namespace UglyXTC\Controller;
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
    public function __construct($requestedPage) {
        $this->requestedPage = $requestedPage;
    }

}
