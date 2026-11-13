<?php

$titrePage = "Liste des cartes";

$categories = ["Carte", "Pack d'emarage", "Kit deck"];
echo $categories[0];

$cartes = [
    'nom' => 'la relic',
    'type' => 'gear',
    'disponibilite' => true 
];
[
    'nom' => 'v',
    'type' => 'legend',
    'disponibilite' => true 
];
[
    'nom' => 'screw',
    'type' => 'unit',
    'disponibilite' => true 
];

echo $cartes['nom'];

$categories[] = "Booster";

$livre["disponibilite"] = false;
$cartes["cout"] = "5 edits";

?>

<h1><?= $titrePage ?></h1>


<?php foreach($cartes as $carte) { ?>
    <h2><?= $carte['nom'] ?></h2>
    <p>Type de la carte : <?= $carte['type'] ?></p>

<?php } ?>