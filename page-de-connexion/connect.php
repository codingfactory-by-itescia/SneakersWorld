<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Goldman" rel="stylesheet">
    <link rel="stylesheet" href="connect.css">
    <title>SNEAKERS WORLD</title>
</head>

<body>

    <?php session_start();

    if (isset($_SESSION['auth'])) : ?>

        <?php header('Location: ../user_account/profil.php') ?>

    <?php else : ?>

        <style>
            body {
                background-color: pink;
            }
        </style>

        <header>
            <a class="button-menu" href="../page-accueil/accueil.php">Sneakers world</a>
        </header>
        <div id="card">
            <div class="card-connect">
                <h1>CONNEXION</h1>
                <form action="" method="post">
                    <input name="identifiant" class="input-connect login" type="email" placeholder="Votre email" required>
                    <input name="password" class="input-connect password" type="password" placeholder="Mot de passe" required>
                    <div id="buttons">
                        <a class="button" href="../page-inscription/signIn.html">Inscription</a>
                        <input class="button submitButton" type="submit" value="Connexion">
                    </div>
                </form>
            </div>
        </div>

    <?php endif; ?>

</body>

</html>
<script src="connect.js"></script>