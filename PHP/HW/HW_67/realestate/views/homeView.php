<?php
    //include 'housesModel.php';
    $styles = "
        .house img {
            width: 206px;
            height: 150px;
        }
        /*
        .cheap {
            color: red;
        }

        .cheap::before {
            content: \"ONLY \";
        }

        .cheap::after {
            content: \" !!\"
        }
        */
    ";
    if(!isset($page)){
        $page = 0;
    }
    include 'top.php';
?>
    <div class="row">
        <?php include 'filters.php' ?>


        <div class="col-sm-9">
            <div class="row">
                <a class="a col-sm-1 btm btn-primary pull-left" href="index.php?page=<?= $page - 1?>"<?php if($page === 0) echo "disabled"?>">Previous</a>
                <a class="col-sm-1 btm btn-primary pull-right" href="index.php?page=<?= $page + 1?>">Next</a>
            </div>
            <br>
            <?php 
            foreach($houses as $house) :

            ?>
                <a href="index.php?action=details&houseId=<?= $house['id'] ?>">
                    <div class="col-md-3 col-sm-4 house">
                        <figure>
                            <img src="<?= $house['picture'] ?>" alt="picture of the house"/>
                        </figure>
                        <figcaption class="text-center">
                        <h6><?= $house['id']?></h6>
                            <h3 
                                <?php if($house['price'] < 1500000) echo "class=\"cheap\""?>
                            ><?= number_format($house['price'], 2) ?></h3>
                            <h4><?= $house['address'] ?></h4>
                            <h5><?= "{$house['city']}, {$house['state']} {$house['zip']}"?></h5>
                        </figcaption>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
<?php
include 'bottom.php';
?>