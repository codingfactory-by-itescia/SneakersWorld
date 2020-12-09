<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
    <link rel="stylesheet" href="./profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../header/mobile-header.css">
</head>

<body>
    <?php session_start();

    if($_SESSION): ?>

        <?php if ($_SESSION['auth']) : ?>

            <?php $user = $_SESSION['auth']; ?>

            <div id="header"></div>

        <h1 id="title-profil">Profil</h1>
        <div class="profil-container">
            <div class="profil-card">
                <table>
                    <thead>
                        <h2 class="info-title">Vos informations</h2>
                        <div class="black-divider"></div>
                    </thead>
                    <tr>
                        <td>Prénom : </td>
                        <td><?= $user->prenom ?></td>
                    </tr>
                    <tr>
                        <td>Nom : </td>
                        <td><?= $user->nom ?></td>
                    </tr>
                    <tr>
                        <td>Date de naissance : </td>
                        <td><?= $user->naissance ?></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><?= $user->mail ?></td>
                    </tr>
                    <tr>
                        <td>Adresse : </td>
                        <td><?= $user->adresse ?></td>
                    </tr>
                    <tr>
                        <td>Ville : </td>
                        <td><?= $user->ville ?></td>
                    </tr>
                    <tr>
                        <td>Code Postal</td>
                        <td><?= $user->cdp ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <script src="../header/header.js"></script>

        <?php endif;?>

    <?php else: ?>

        <h1>Page introuvable</h1>

    <?php endif; ?>

</body>

</html>