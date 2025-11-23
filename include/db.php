<?php
class DB
{
    public static $str_hosting = 'localhost';
    public static $str_database = 'mvp999bet_demo';
    public static $str_username = 'mvp999bet_demo';
    public static $str_password = 'mM336699*m';

    protected static $pdo = null;
    public static function getConnection()
    {
        if (self::$pdo == null) {
            self::init();
        }

        try {
            $old_errlevel = error_reporting(0);
            self::$pdo->query("SELECT 1");
        } catch (PDOException $e) {
            self::init();
        }
        error_reporting($old_errlevel);
        return self::$pdo;
    }

    protected static function init()
    {
        try {
            self::$pdo = new PDO("mysql:host=" . self::$str_hosting . ";dbname=" . self::$str_database, self::$str_username, self::$str_password);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->exec("SET NAMES 'UTF8';");
            self::$pdo->exec("SET CHARACTER SET utf8");
            self::$pdo->exec("SET character_set_results=utf8");
            self::$pdo->exec("SET character_set_client=utf8");
            self::$pdo->exec("SET character_set_connection=utf8");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
