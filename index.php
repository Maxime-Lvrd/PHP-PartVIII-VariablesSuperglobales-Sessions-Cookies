<?php include 'header.php' ?>

<div class="text-center">
    <h1>Exercices PHP</h1>

    <h2>PARTIE VIII - Variables superglobales, sessions et cookies</h2>

    <h3>Exercice 1</h3>
    <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
    <p>- son User Agent</p>
    <p>- son adresse ip</p>
    <p>- le nom du serveur</p>

    <h3>Exercice 2</h3>
    <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.</p>
    <p>Ces variables auront été définies directement dans le code.</p>
    <p>Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
    <div class="bg-dark text-white pt-2 px-2 mb-2 d-inline-block">
        <p>Variables déclarées dans l'<a href="exercice2.php">exercice 2</a> et affichage du contenu ci-dessous :</p>
        <p>« Bonjour <?= $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>, vous êtes agé de <?= $_SESSION['age'] ?> ans ! »</p>
    </div>

    <h3>Exercice 3</h3>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.</p>
    <p>A la validation du formulaire, stocker les informations dans un cookie.</p>

    <h3>Exercice 4</h3>
    <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>

    <h3>Exercice 5</h3>
    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
</div>

<?php include 'footer.php' ?>