
<h1><?= $unResto['nomR']; ?></h1>

<span id="note">
        <?php
        for ($i = 0; $i < $like; $i++) {
            ?>

            <?= "<img src=\"./images/like.png\">";
        }

        for ($i = 0; $i < $dislike; $i++) {
            ?>

            <?= "<img src=\"./images/neutre.png\">";
        }

        ?>

</span>
<section>
    Cuisine <br />
    <?php
    for ($i = 0; $i < count($typeCuisine); $i++) {
        ?>

        <?= " <li class='tag'><span class='tag'>#</span>".$typeCuisine[$i]['libelleTC']."</li>";
    }
    ?>
</section>
<p id="principal">   
    <?= $unResto['descR']; ?>
</p>

<h2 id="adresse">
    Adresse
</h2>
<p>
    <?= $unResto['numAdrR']; ?>
    <?= $unResto['voieAdrR']; ?><br />
    <?= $unResto['cpR']; ?>
    <?= $unResto['villeR']; ?><br />
    <br />Coordonées GPS :
    <?= $unResto['latitudeDegR']; ?>
    <?= $unResto['longitudeDegR']; ?>
</p>

<h2 id="photos">
    Photos
</h2>
<ul id="galerie">
    <?php
    for ($i = 0; $i < count($photos); $i++) {
        ?>

        <?= "<li><img src=./photos/".$photos[$i]['cheminP']."></li>";?>

        <?php
    }
    ?>
</ul>

<h2 id="horaires">
    Horaires
</h2> 
<?= $unResto['horairesR']; ?>

<h2 id="critiques">
    Critiques
</h2>

<ul id="critiques">
    <?php
        for ($i = 0; $i < count($critiques ); $i++) {
            ?>

        <?= "<li>".$critiques [$i]['pseudoU']."<br>".$critiques [$i]['note']."/5 ".$critiques [$i]['commentaire']."</li>";

    }
    ?>
</ul>

