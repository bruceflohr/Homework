<?php
class Db {

    private static $db;

    private function __construct() {}

    public static function getDb() {
        if(empty(Db::$db)) {
            $cs = "mysql:host=localhost;dbname=test";
            $user = "phpuser";
            $password = 'p@$$w0rd';

            try {
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                Db::$db = new PDO($cs, $user, $password, $options);
            } catch (PDOException $e) {
                $error = "Something went wrong " . $e->getMessage();
            }
        }

        return Db::$db;
    }
}
?>