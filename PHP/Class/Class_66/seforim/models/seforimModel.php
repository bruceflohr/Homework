<?php
    include '../utils/db.php';
    
    try {
        $query = "SELECT id, name FROM seforim";
        $results = $db->query($query);
        $seforim = $results->fetchAll(PDO::FETCH_ASSOC);

        $results->closeCursor();
    
        if(isset($theId)) {
            $query = "SELECT id, name, price FROM seforim WHERE id = :theId";
            $statement = $db->prepare($query);
            $statement->bindValue('theId', $theId);
            $statement->execute();
            
            $selectedSefer = $statement->fetch();
            if(empty($selectedSefer)) {
                $errors[] = "Couldnt find sefer {$theId}";
            }
        }
    } catch (PDOException $e) {
        $errors[] = "Something went wrong " . $e->getMessage();
    }
?>