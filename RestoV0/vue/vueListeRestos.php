
<h1>Liste des restaurants</h1>

<?php
for ($i = 0; $i < count($lesRestos); $i++) {
    ?>

    <div class="card">
        <div class="photoCard">
            <?php
            $photos = getPhotosByIdR($i+1);
            ?>
            <?= "<img src=./photos/".$photos[0]['cheminP'].">";?>
        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&idR=" . $lesRestos[$i]['idR'] . "'>" . $lesRestos[$i]['nomR'] . "</a>"; ?>
            <br />
            <?= $lesRestos[$i]["numAdrR"] ?>
            <?= $lesRestos[$i]["voieAdrR"] ?>
            <br />
            <?= $lesRestos[$i]["cpR"]?>
            <?= $lesRestos[$i]["villeR"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">
                <?php
                $typeCuisine = Array();
                $proposer = getProposerByIdR($i+1);
                for ($j = 0; $j < count($proposer); $j++) {
                    $typeCuisine[] = getTypeCuisineByIdTC($proposer[$j]['idTC']);
                }
                for ($k = 0; $k < count($typeCuisine); $k++) {
                    ?>

                    <?= " <li class='tag'><span class='tag'>#</span>".$typeCuisine[$k]['libelleTC']."</li>";?>

                    <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <?php
}
?>


