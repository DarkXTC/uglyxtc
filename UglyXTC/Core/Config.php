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
    private static $port = "3306";
    private static $db = "testdb";
    private static $pdo;

    public static function getDSN() {
        return "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$db;
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

    public static function getURLBase() {
        return "localhost/darkxtc/uglyxtc/web/";
    }

    public static function getUser() {
        return self::$user;
    }

    public static function getPass() {
        return self::$pass;
    }

    /**
     * 
     * @return \PDO
     */
    public static function getPDOConnection() {
        if (!isset(self::$pdo)) {
            self::$pdo = new \PDO(self::getDSN(), self::getUser(), self::getPass());
        }
        return self::$pdo;
    }

}
