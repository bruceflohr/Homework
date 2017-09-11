<div class="col-sm-3">
    <div class="well">Filters</div>
    <form action="index.php">
        <div class="well">
            <div class="form-group">
                <label for="zip">Zip</label>
                <input class="form-control" id="zip" name="zip"
                <?php if (!empty($zip)) echo "value=\"$zip\"" ?>
                />
            </div>
        </div>
        <input type="hidden" name="action" value="<?= $action ?>">
        <input type="submit" value="filter"/>
    </form>
</div>