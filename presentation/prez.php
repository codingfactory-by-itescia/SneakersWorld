<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prez.css">
    <title>SneakWorld</title>
</head>
<body>
    <header> 
        
    <?php session_start();
    
        $user = $_SESSION['auth']; 

		if($user) : ?>
		
		<p class="entete">Connecté en tant que <?= $user->prenom ?></p>

		<?php else: ?>

			<p class="entete">Oublie pas de te connecter mon reuf  <a href="../page-de-connexion/connect.html"><button class="seconnecter">Se connecter</button></a> </p> 

		<?php endif; ?>
    
    </header>

    <a href="../page-accueil/accueil.php"><h1>SneakersWorld</h1></a>

<nav>
        <ul>
            <li id="nike"><a href="# ">NIKE </a>
                <ul class="sous">
                    <li><a >JORDAN 1 </a></li>
                    <li><a >AF1</a></li>
                    <li><a> ?????????? </a></li>
                
                </ul>	
            </li>

            <li class="adidas"><a href="#sport ">ADIDAS </a>
                <ul class="sous"> 
                    <li ><a href="Nsport.html" >YEEZY</a></li>
                    <li><a href="Csport.html" >Classements</a></li>
                </ul>	
            </li>	
        

            <li class="luxe"><a href="#mondeOuvert">LUXE</a>
                <ul class="sous">
                    <li ><a href="Nmonde.html" >OFF WHITE </a></li>
                    <li><a href="Cmonde.html" >DIOR </a></li>


                </ul>	
            </li>


            <li class="autres"><a href="#">AUTRES </a>
                <ul class="sous">
                    <li ><a href="../presentation/prez.php" >Bio</a></li>
                    <li><a href="Cfps.html" >???????</a></li>
                </ul>	
            </li>

    </ul>
</nav>

<div class="descrip">
    <h2>Description</h2>
</div>

<div class="bio_prez">
    <div class="bio">
        <h2>Le site</h2>
        <p>SneakersWorld est un site français où vous pouvez acheter ou revendre des paires d'exception au meilleurs prix. Nous faisons tous pour que votre experience sur ce site soit agreable et securisé les paire acheter seront d'abord verifier afin de prouver qu'elles soient authentique et non une contrefaçon.</p>
    </div>
    <div class="bio">
        <h2>L'équipe</h2>
        <p>Notre équipe vous est totalement dediée nous sommes a votre dispoqition pour que vos achats ou vos ventes ce fasse dans la plus grande simpliciter tout en etant securisé.  Nous sommes actuellement composer de 6 membres</p>
    </p>
    </div>
</div>

<div class="dev">    
   <h2>Nos devloppeurs</h2>
</div>

<div class="devo2">
    <div class="devo">
        <div class="dev_pic">
            <img src="images/IMG_3459.jpg" alt="Avatar" class="image">
            <div class="overlay">Merwan Laouini</div>
<<<<<<< HEAD:presentation/prez.html
     </div>
        <div class="dev_pic">
            <img src="images/angel.jpeg" alt="Avatar" class="image">
        <div class="overlay">Angel Moreau</div>
    </div>
    <div class="dev_pic">
            <img src="images/Walid.png" alt="Avatar" class="image">
            <div class="overlay">Walid Haddoury</div>
    </div>
    <div class="dev_pic">
        <img src="images/pnl.png" alt="Avatar" class="image">
        <div class="overlay">Alexis Majchrzak</div>
    </div>
    <div class="dev_pic">
        <img src="images/alex 2.jpeg" alt="Avatar" class="image">
        <div class="overlay">Axel Demorest</div>
    </div><div class="dev_pic">
        <img src="images/IMG_0353.jpg" alt="Avatar" class="image">
        <div class="overlay">Nohan Marie-Louise </div>
=======
>>>>>>> master:presentation/prez.php
    </div>
</div>
</div>
    
</body>
</html>