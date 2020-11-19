<?php

$nom = validDonnees($_POST['nom']);
$prenom = validDonnees($_POST['prenom']);
$naissance = validDonnees($_POST['naissance']);
$mail = validDonnees($_POST['mail']);
$adresse = validDonnees($_POST['adresse']);
$ville = validDonnees($_POST['ville']);
$cp = validDonnees($_POST['cp']);
$mdp = validDonnees($_POST['mdp']);

function validDonnees($donnees) {
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

?>