document.getElementById('header').innerHTML = `<header id="header">
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
    <li><img class="coll-img" src="../header/Logo/Adidas.png" alt="Logo adidas"></li>
    <li><img class="coll-img" src="../header/Logo/Asics.png" alt="Logo Asics"></li>
    <li><img class="coll-img" src="../header/Logo/Jordan.png" alt="Logo Jordan"></li>
    <li><img class="coll-img" src="../header/Logo/New Balance.png" alt="Logo New Balance"></li>
    <li><img class="coll-img" src="../header/Logo/Nike.png" alt="Logo Nike"></li>
    <li><img class="coll-img" src="../header/Logo/Puma.png" alt="Logo Puma"></li>
    <li><img class="coll-img" src="../header/Logo/Vans.png" alt="Logo Vans"></li>
</ul>
</header>
<footer><a href="../presentation/prez.php">BIO</a></footer>`;



const burgerButton = document.getElementById('toggle');
const mobileMenu = document.getElementById('menu-links');
const button = document.querySelectorAll('.link');
const underMenu = document.querySelector('#coll-logo');



burgerButton.addEventListener('click', () => {
    console.log('CLICK');
    mobileMenu.classList.toggle('visible');
});

button.forEach(link => {
    console.log(button);
    link.addEventListener('click', () => {
        button.forEach(element => {
            element.classList.remove('isActive');
            underMenu.style.display = 'none';
        });
        link.classList.add('isActive');
    });
});

button[1].addEventListener('click', () => {
    underMenu.style.display = 'flex';
});

