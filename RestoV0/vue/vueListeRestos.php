
<h1>Liste des restaurants</h1>

<?php
for ($i = 0; $i < count($lesRestos); $i++) {
    ?>

    <div class="card">
        <div class="photoCard">
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
            </ul>
        </div>
    </div>

    <?php
}
?>


