<?php
$nomSite = "Cyberpunk-TCG";

$livres = [
    // vos données...
];

require __DIR__ . '/../includes/header.php';
?>

<h1><?= $nomSite ?></h1>

<!-- votre foreach et votre affichage -->

<?php require __DIR__ . '/../includes/footer.php'; ?>

<?php

$titrePage = "Liste des cartes";

$categories = ["Carte", "Pack d'emarage", "Kit deck"];

$cartes = [
    ['id' => 1, 'nom' => 'la relic', 'type' => 'gear',   'disponibilite' => true],
    ['id' => 2, 'nom' => 'v',        'type' => 'legend', 'disponibilite' => true],
    ['id' => 3, 'nom' => 'screw',    'type' => 'unit',   'disponibilite' => true]
];

$categories[] = "Booster";

$cartes[1]["disponibilite"] = false;
$cartes[0]["cout"] = "5 edits";

?>

<h1><?= $titrePage ?></h1>


<?php foreach($cartes as $carte) { ?>
    <h2><?= $carte ["id"] ?></h2>
    <h3><?= $carte ['nom'] ?></h3>
    <p>Type de la carte : <?= $carte ['type'] ?></p> 
<?php if ($carte['disponibilite']) { ?>
    <p>Disponibilite</p>
<?php } else { ?>
    <p>Indisponible</p>
<?php }} ?>