<?php

// On démarre la session
session_start();

if (isset($_SESSION['auth'])) { // Si tu es connecté on te déconnecte et on te redirige vers une page.

    // Supression des variables de session et de la session
    $_SESSION = array();

    session_destroy();

    sleep(3);

    header('Location: ./connect.php');
}