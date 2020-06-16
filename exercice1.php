<?php include 'header.php' ?>

<div class="text-center mt-3">
    <p>L'User Agent est : <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
    <p>Votre adresse IP est : <?=  $_SERVER['SERVER_ADDR'] ?></p>
    <p>Le nom du serveur est : <?= $_SERVER['SERVER_NAME'] ?></p>
</div>

<?php include 'footer.php' ?>