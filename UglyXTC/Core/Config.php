<?php

namespace UglyXTC\Core;

/*
 * The MIT License (MIT)
 * 
 * Copyright (c) 2014 DarkXTC
 * For the complete license see "LICENSE"
 */

/**
 * Description of Config
 *
 * @author darkxtc
 */
class Config {

    private static $user = "bruce";
    private static $pass = "mypass";
    private static $host = "localhost";
    private static $port = "5432";
    private static $db = "testdb";

    public static function getDSN() {
        return "pgsql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$db . ";user=" . self::$user . ";password=" . self::$pass;
    }

    public static function getLicense() {
        return "CC-BY-SA v3.0";
    }

    public static function getLicenseLong() {
        return "The content on this page is licensed under CC-BY-SA v3.0 unless stated otherwise.";
    }

    public static function getLicenseLink() {
        return "http://creativecommons.org/licenses/by-sa/3.0/";
    }

}
