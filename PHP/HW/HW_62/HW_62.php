<?php

    $cs = "mysql:host=localhost;dbname=booksale";
    $user = "test";
    $password = '';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        echo "Connected<br/>";
        echo "<hr/>";

        $query = "SELECT * FROM booksale LIMIT 10";
        $results = $db->query($query);
        $books = $results->fetchAll();
        $results->closeCursor();
        foreach($books as $book) {
            //echo "Name: {$book['Name']}<br/>";
            //echo "Cost: $ {$book['Cost']}<br/>";
        }
        
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
    include "top.php"

    ?>
    <form>
        <label for="book">Choose Book</label>
         <select name="book" value="book">
                    <?php foreach($books as $key=>$book) : ?>
                    <option>
                    <?= $book['Name']; ?>
                    </option>
                    <?php endforeach?>
            </select>
        <input type="submit"/>
    </form>

    <form action="" class="form-horzontal">
        <div class="form-group col-sm-offset-4">
            <label for="Sefer" col-sm-2>Select a sefer</label>
            <select class="form-control" col-sm-6>
                <option value="">Shas</option>
                <option value="">New Frankle Ramb</option>
            </select>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>

<?php
include "bottom.php"
?>