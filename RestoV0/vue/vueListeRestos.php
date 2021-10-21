<h1>Liste des restaurants</h1>
<?php
for ($i = 0; $i < count($lesRestos); $i++) {
    ?>
    <div class="card">
        <div class="photoCard">
            <?= "<img src=./photos/".$lesPhotos[$i+1].">";?>
        </div>
        <div class="descrCard"><?= "<a href='./?action=detail&idR=" . $lesRestos[$i]['idR'] . "'>" . $lesRestos[$i]['nomR'] . "</a>"; ?>
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
                for ($j = 0; $j < count($typecuisine); $j++) {
                    if($typecuisine[$j]['idR'] == $i+1){
                        echo(" <li class='tag'><span class='tag'>#</span>" . $typecuisine[$j]['libelleTC'] . "</li>");
                    }
                }
                ?>
            </ul>
        </div>
    </div>

    <?php
}
?>


