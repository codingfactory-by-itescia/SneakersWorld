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
    
    if (!empty($_POST)) {

        $errors = array();
        
        if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['prenom'])) {
            $errors['prenom'] = "Pseudo invalide.";
        }

        if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['nom'])) {
            $errors['nom'] = "Pseudo invalide.";
        } 

        if (empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = "Email invalide";
        } else {

            $req = $pdo->prepare('SELECT id FROM users WHERE mail = ?');

            $req->execute([$_POST['mail']]);

            $user = $req->fetch();

            if ($user) {
                $errors['mail'] = 'Cet email est déjà utilisé';
            }
        }
        

        if (empty($_POST['password'])) {
            $errors['password'] = "Mot de passe invalide";
        }

        if (empty($_POST['birth'])) {
            $errors['birth'] = "Date de naissance invalide";
        }

        if (empty($_POST['adress'])) {
            $errors['adress'] = "adresse invalide";
        }

        if (empty($_POST['city'])) {
            $errors['city'] = "Ville invalide";
        }

        if (empty($_POST['zipCode'])) {
            $errors['zipCode'] = "Code postal invalide";
        }

        if (empty($errors)) {

            require '../database/db.php';
            
            $req = $pdo->prepare("
                        INSERT INTO users(nom,prenom,password,naissance,mail,adresse,ville,cdp)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
                    ");

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $req->bindValue(1, $_POST['nom']);
            $req->bindValue(2, $_POST['prenom']);
            $req->bindValue(3, $password);
            $req->bindValue(4, $_POST['birth']);
            $req->bindValue(5, $_POST['mail']);
            $req->bindValue(6, $_POST['adress']);
            $req->bindValue(7, $_POST['city']);
            $req->bindValue(8, $_POST['zipCode']);

            $req->execute();

            /*
            $req2 = $pdo->prepare("SELECT * FROM users WHERE mail = ?");

            $req2->execute(array($_POST['mail']));

            $user2 = $req2->fetch();

            session_start();

            $_SESSION['auth'] = $user2;
            */

            header('Location: ../img360/sneak.html');

            exit;
        }
    }
    ?>
    <div class="form">
        <form action="" method="POST">
            <div class="place">
                <input name="nom" class="lastName input" type="text" placeholder="Nom" required>
            </div>
            <div class="place">
                <input name="prenom" class="name input" type="text" placeholder="Prénom" required>
            </div>
            <div class="place">
                <input name="password" class="password input" type="password" placeholder="Mot de passe" required>
            </div>
            <div class="place">
                <input name="birth" class="birth input" type="text" placeholder="Date de naissance" required>
            </div>
            <div class="place">
                <input name="mail" class="mail input" type="text" placeholder="E-mail" required>
            </div>
            <div class="place">
                <input name="adress" class="adress input" type="text" placeholder="Adresse" required>
            </div>
            <div class="place">
                <input name="city" class="city input" type="text" placeholder="Ville" required>
            </div>
            <div class="place">
                <input name="zipCode" class="zipCode input" type="text" placeholder="Code postal" required>
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