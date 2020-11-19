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

    $user = $_SESSION['auth'];

    if ($user) : ?>

    <style>

        body {
            background-color: white;
        }
        </style>

        <div class="container-error">
            <div class="error-div">
                <h1>Tu es déjà connecté</h1>
            </div>
        </div>

    <?php else : ?>

        <header>
            <a class="button-menu" href="../sneak.html">Sneakers world</a>
        </header>
        <div id="card">
            <div class="card-connect">
                <h1>CONNEXION</h1>
                <form action="">
                    <input class="input-connect login" type="text" placeholder="Identifiant" required>
                    <input class="input-connect password" type="password" placeholder="Mot de passe" required>
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