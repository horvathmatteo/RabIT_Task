<?php

class DbConnect {

    public static $host = 'localhost';
    public static $user = 'root';
    public static $password = '';
    public static $db = 'testdb';

    public static function connect() {
        $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$db.";charset=utf8", self::$user, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query) {
        $statement = self::connect()->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll();
        return $data;    
    }
}

?>