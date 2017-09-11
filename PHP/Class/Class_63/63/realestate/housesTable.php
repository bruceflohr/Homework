<?php
    //include 'housesModel.php';
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
                    <td><?= number_format($house['price'], 2) ?></td>
                    <td><?= $house['address'] ?></td>
                    <td><?= $house['city'] ?></td>
                    <td><?= $house['state'] ?></td>
                    <td><?= $house['zip'] ?></td>
                    <td><img src= "<?= $house['picture'] ?>" alt="the house"/></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php
include 'bottom.php';
?>