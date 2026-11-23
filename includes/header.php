<?php
// Demande à PHP d'afficher les erreurs dans le navigateur.

ini_set('display_errors', '1');

// Demande l'affichage des erreurs survenant au démarrage de PHP.
// Certaines erreurs de démarrage ne peuvent toutefois pas être
// activées depuis un script déjà en cours d'exécution.
ini_set('display_startup_errors', '1');

// Demande à PHP de signaler toutes les catégories d'erreurs,
// y compris les avertissements (warnings) et les notices.
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $nomSite ?></title>
</head>
<body>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="listeCarte.php">Liste</a>
    </nav>