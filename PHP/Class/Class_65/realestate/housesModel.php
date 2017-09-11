<?php
include 'db.php';

try {
    $query = "SELECT * FROM houses LIMIT 20";
    $results = $db->query($query);
    $houses = $results->fetchAll();
    $results->closeCursor();
} catch (PDOException $e) {
    $error = "Something went wrong " . $e->getMessage();
}
?>