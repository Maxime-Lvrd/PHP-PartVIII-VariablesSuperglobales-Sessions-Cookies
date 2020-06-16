<?php session_start();
include 'header.php' ?>

<div class="text-center mt-3">
    <p>Ton login est : <?= $_COOKIE['login']; ?></p>
    <p>Ton mot de passe est : <?= $_COOKIE['password']; ?></p>
</div>

<?php include 'footer.php' ?>