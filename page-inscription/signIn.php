<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Goldman" rel="stylesheet">
    <link rel="stylesheet" href="signIn.css">
    <title>Sneakers World</title>
</head>

<body>
    <header>
        <div>
            <a class="button-menu" href="../sneak.html">Sneakers world</a>
        </div>
    </header>
    <?php
    
        if(!empty($_POST)) {

            $errors = array();

            if(empty($_POST['username'])) {
                $errors['username'] = "Vous n'avez pas entré de pseudo.";
            }

            var_dump($errors);
        }

    ?>
    <div class="form">
        <form action="">
            <div class="place">
                <input class="lastName input" type="text" placeholder="Nom" required>
            </div>
            <div class="place">
                <input class="name input" type="text" placeholder="Prénom" required>
            </div>
            <div class="place">
                <input class="password input" type="text" placeholder="Mot de passe" required>
            </div>
            <div class="place">
                <input class="birth input" type="text" placeholder="Date de naissance" required>
            </div>
            <div class="place">
                <input class="mail input" type="text" placeholder="E-mail" required>
            </div>
            <div class="place">
                <input class="adress input" type="text" placeholder="Adresse" required>
            </div>
            <div class="place">
                <input class="city input" type="text" placeholder="Ville" required>
            </div>
            <div class="place">
                <input class="zipCode input" type="text" placeholder="Code postal" required>
            </div>
            <div id="buttons">
                <a class="button" href="../sneak.html">Annuler</a>
                <input class="button submitButton" type="submit" value="Valider"/>
            </div>
        </form>
    </div>

    
</body>
<script src="signIn.js"></script>
</html>