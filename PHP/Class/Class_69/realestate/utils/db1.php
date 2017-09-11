<?php
class Db {

    private $db;

    public function __construct() {
        $cs = "mysql:host=localhost;dbname=test";
        $user = "phpuser";
        $password = 'p@$$w0rd';

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $this->db = new PDO($cs, $user, $password, $options);
        } catch (PDOException $e) {
            $error = "Something went wrong " . $e->getMessage();
        }
    }

    /*public function getDb() {
        return $this->db;
    }*/

    public function prepare($query) {
        return $this->db->prepare($query);
    }
}
?>