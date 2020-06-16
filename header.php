<?php session_start(); // On démarre la session AVANT toute chose
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // vérification des données pour les cookies
    $login = $_POST['login'];
    $password = $_POST['password'];
// stockage des cookies
// setcookie('clé', vérification, durée de vie du cookie, '/portée des dossiers touchés', 'sous-domaine', https(secure), httpOnly)
setcookie('login', $login, time() + 3600, '/', '', false, false); // On écrit un cookie
setcookie('password', $password, time() + 3600, '/', '', false, false); // On écrit un autre cookie...
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Exercices PHP - Part. VIII</title>
</head>

<body>

    <!-- barre de navigation -->
    <ul class="nav nav-tabs bg-dark">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="exercice1.php">Exercice 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="exercice2.php">Exercice 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="exercice3.php">Exercice 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="exercice4.php">Exercice 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="exercice5.php">Exercice 5</a>
        </li>
    </ul>