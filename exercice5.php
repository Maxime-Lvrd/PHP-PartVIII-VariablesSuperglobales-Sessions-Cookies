<?php include 'header.php' ?>

<div class="d-flex justify-content-center mt-3">
    <form method="post" class="col-6 border p-3 bg-dark text-white">
        <div class="form-group">
            <label for="login">Login :</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="login">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>

<?php include 'footer.php' ?>