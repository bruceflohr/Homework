<?php
include 'utils/db.php';

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

$numPerpage = 4;

try {
    $query = "SELECT * FROM real_estate WHERE (:zip = '' OR zip=:zip)
                                    AND (:min = '' OR price >= :min)
                                    AND (:max = '' OR price <= :max)
                                    LIMIT :page, :perPage";

    $statement = $db->prepare($query);
    $statement->bindValue('zip', $zip);
    $statement->bindValue('min', $min);
    $statement->bindValue('max', $max);
    $statement->bindValue('page', (int)$page * $numPerpage, PDO::PARAM_INT);
    $statement->bindValue('perPage', $numPerpage, PDO::PARAM_INT);

    $statement->execute();
    $houses = $statement->fetchAll();
    $statement->closeCursor();

} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
?>