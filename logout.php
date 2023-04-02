<?php
session_start();

// Déconnexion de l'utilisateur
unset($_SESSION["login"]);

// Redirection vers la page de connexion
header("Location: login.php");
exit;

?>
