<?php
    //include 'housesModel.php';
    $styles = "
        .house img {
            width: 262.500px;
            height: 196.875px;
        }
    ";
    include 'top.php';
?>
    <div class="row">
        <?php foreach($houses as $house) :?>
            <div class="col-md-3 col-sm-4 house">
                <figure>
                    <img src="<?= $house['picture'] ?>" alt="picture of the house"/>
                </figure>
                <figcaption class="text-center">
                    <h3><?= number_format($house['price'], 2) ?></h3>
                    <h4><?= $house['address'] ?></h4>
                    <h5><?= "{$house['city']}, {$house['state']} {$house['zip']}"?></h5>
                </figcaption>
            </div>
        <?php endforeach ?>
    </div>
<?php
include 'bottom.php';
?>