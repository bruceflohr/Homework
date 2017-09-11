<?php
if(! empty($_POST["price"])) {
    $price = $_POST["price"];
}
?>
<div class="col-sm-3">
    <div class="well">Filters</div>
    <form action="index.php">
        <div class="well">
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" id="price" name="price"
                <?php if (!empty($price)) echo "value=\"$price\"" ?>
                />
            </div>
        </div>
        <input type="hidden" name="action" value="<?= $action ?>">
        <input type="submit" value="filter"/>
    </form>
</div>