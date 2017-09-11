<?php
include 'utils/db.php';
require 'house.php';

if (empty($zip)) {
    $zip = '';
}

if (empty($min)) {
    $min = '';
}

if (empty($max)) {
    $max = '';
}

if (empty($page)) {
    $page = 0;
}

$numPerPage = 4;

try {
    $query = "SELECT * FROM houses2 WHERE (:zip = '' OR zip=:zip)
                                    AND (:min = '' OR price >= :min)
                                    AND (:max = '' OR price <= :max)
                                    LIMIT :page, :perPage";

    //$database = new Db();
    //$statement = $database->getDb()->prepare($query);
    $statement = Db::getDb()->prepare($query);
    $statement->bindValue('zip', $zip);
    $statement->bindValue('min', $min);
    $statement->bindValue('max', $max);
    $statement->bindValue('page', (int)$page * $numPerPage, PDO::PARAM_INT);
    $statement->bindValue('perPage', $numPerPage, PDO::PARAM_INT);

    $statement->execute();
    $houseData = $statement->fetchAll();
    $statement->closeCursor();
    $houses = [];
    foreach($houseData as $data) {
        $houses[] = new House($data);
    }
} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
?>