<?php
class Db {

    private $db;
    private static $instance;

    private function __construct() {

        $config = parse_ini_file('../config.ini'); 

        $cs = "mysql:host=localhost;dbname={$config['dbname']}";
        $user = $config['username'];
        $password = $config['password'];

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $this->db = new PDO($cs, $user, $password, $options);
        } catch (PDOException $e) {
            $error = "Something went wrong " . $e->getMessage();
        }
    }

    private function __clone() {}

    public static function getDb() {
        if(empty(Db::$instance)) {
            Db::$instance = new Db();
        }
        return Db::$instance;
    }

    public function prepare($query) {
        return $this->db->prepare($query);
    }
}
?>