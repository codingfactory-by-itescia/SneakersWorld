<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./mobile-header.css">
</head>

<body>
    <header>
        <nav>
            <i id="toggle" class="fas fa-bars"></i>
            <h1 id="title">SneakersWorld</h1>
            <ul id="menu-links">
                <a class="link isActive" href="../page-accueil/accueil.php">Accueil</a>
                <a class="link">Collections</a>
                <a class="link" href="../page-ajouter-shoes/addShoes.html">Rajouter sa paire</a>
                <!-- Accueil, se connecter, les paires, Rajouter sa paire, Déconnection -->
            </ul>
            <ul id="profil-links">
                <li><a href="../page-de-connexion/connect.php"><i class="fas fa-user"></i></a></li>
                <li><a href="../page-de-connexion/deco.php"><i class="fas fa-power-off"></i></a></li>
            </ul>
        </nav>
        <ul id="coll-logo" style="display: none">
            <li><img class="coll-img" src="./Logo/Adidas.png" alt="Logo adidas"></li>
            <li><img class="coll-img" src="./Logo/Asics.png" alt="Logo Asics"></li>
            <li><img class="coll-img" src="./Logo/Jordan.png" alt="Logo Jordan"></li>
            <li><img class="coll-img" src="./Logo/New Balance.png" alt="Logo New Balance"></li>
            <li><a href="../collection/Nike/NI.html"></a><img class="coll-img" src="./Logo/Nike.png" alt="Logo Nike"></li>
            <li><a href="../collection/Puma/P.html"></a><img class="coll-img" src="./Logo/Puma.png" alt="Logo Puma"></li>
            <li><a href="../collection/Vans/V.html"></a><img class="coll-img" src="./Logo/Vans.png" alt="Logo Vans"></li>
        </ul>
    </header>
    <div class="container"></div>

    <footer><a href="../presentation/prez.php">BIO</a></footer>

    <script src="./header.js"></script>
</body>

</html>