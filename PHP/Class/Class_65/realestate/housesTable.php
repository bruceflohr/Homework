<?php
    function getTd($value, $houseId) {
        $it = "<td><a href=\"houseDetailsController.php?houseId=$houseId\">$value</a></td>";
        return $it;
    }

    $styles = "
        .house img {
            width: 131.24px;
            height: 98px;
        }
    ";
    include 'top.php';
?>
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Price</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($houses as $house) :?>
                <tr class="house">
                    <?= getTd(number_format($house['price'], 2), $house['id']) ?>
                    <?= getTd($house['address'], $house['id']) ?>
                    <?= getTd($house['city'], $house['id']) ?>
                    <?= getTd($house['state'], $house['id']) ?>
                    <?= getTd($house['zip'], $house['id']) ?>
                    <td><a href="houseDetailsController.php?houseId={$house['id']}"><img src= "<?= $house['picture'] ?>" alt="the house"/></a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php
include 'bottom.php';
?>