<?php

$titrePage = "Liste des cartes";

$categories = ["Carte", "Pack d'emarage", "Kit deck"];

$cartes = [[
    'nom' => 'la relic',
    'type' => 'gear',
    'disponibilite' => true 
],
[
    'nom' => 'v',
    'type' => 'legend',
    'disponibilite' => true 
],
[
    'nom' => 'screw',
    'type' => 'unit',
    'disponibilite' => true 
]];

$categories[] = "Booster";

$cartes[1]["disponibilite"] = false;
$cartes[0]["cout"] = "5 edits";

?>

<h1><?= $titrePage ?></h1>


<?php foreach($cartes as $carte) { ?>
    <h2><?= $carte ['nom'] ?></h2>
    <p>Type de la carte : <?= $carte ['type'] ?></p> 
<?php if ($carte['disponibilite']) { ?>
    <p>Disponibilite</p>
<?php } else { ?>
    <p>Indisponible</p>
<?php }} ?>