<?php 
    include "db.php";

?>
        <form class="form-horizontal" action="add.php" method="post">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required>
                </div>
            </div>
                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <form class="form-horizontal" action="del.php" method="post">
            <div class="form-group">
                <label for="book" class="col-sm-2 control-label">Select A book</label>
                <div class="col-sm-10">
                <select class="form-control" id="book" name="book">
                        <?php foreach($books as $book) :?>
                        <option Value="<?=$book['name']?>, <?= $book["price"]?>"><?= $book['name'] ?> <?= $book["price"] ?></option>
                        <?php endforeach ?>
                </select>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Delete book</button>
                </div>
            </div>
<?php include "bottom.php" ?>