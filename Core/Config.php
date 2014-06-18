<?php
namespace uglyxtc\Core;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
        return "pgsql:host=".self::$host.";port=".self::$port.";dbname=".self::$db.";user=".self::$user.";password=".self::$pass;
    }
}
