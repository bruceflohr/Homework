<?php

    $cs = "mysql:host=localhost;dbname=booksale";
    $user = "test";
    $password = '';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected<br/>";
        echo "<hr/>";

        $query = "SELECT * FROM booksale";
        $results = $db->query($query);
        $books = $results->fetchAll();
        $results->closeCursor();
        
            if(isset($_GET['book'])){
                if(empty($_GET['book'] || !is_numeric($_GET['book']))){
                    die("No sefer selected");
                }
                //$query = "SELECT Name, Cost FROM booksale"; 
                //$results = $db->query($query);

                //$query = "SELECT * FROM booksale WHERE Name = :theId OR :Another"; 
                $query = "SELECT * FROM booksale WHERE Name = ?"; 
                $statement = $db->prepare($query);
                //$statement->bindValue(1, $_GET['book']); 
                //$statement->bindValue('Another', 43); 
                $statement->execute([$_GET['book']]);

                $selectBooks = $statement->fetch();
                if(empty($books)){
                    die("item is null");
                }

            }

        } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

    include "top.php"

    ?>
    <form action="" class="form-horzontal">
        <div class="form-group col-sm-offset-2">
            <label for="Sefer col-sm-2">Select a sefer</label>
            <select class="form-control" col-sm-6>
                <?php
                    foreach($books as $book) :
                ?>
                <option value="<?= $book ?>">
                </option>
                <?php
                    endforeach
                ?>
            </select>
        </div>
        <div class="form-group col-sm-offset-2">
            <input type="submit">
        </div>
    </form>

    <?php if(!empty($selectBooks )) : ?>
    <h2 class="text-center">
        <?= $selectBooks['name'] ?> is $<?= number_format($selectBooks['cost'], 2) ?>
    </h2>
    <?php endif  ?>

<?php
include "bottom.php"
?>