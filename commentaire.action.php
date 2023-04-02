<?php 
include('config.php');
session_start();
date_default_timezone_set("Europe/Paris");

// Vérification de la session de connexion

if (!isset($_SESSION["login"])) {
    $commentaire_disable = true;
} else {
    $commentaire_disable = false;
    $login = $_SESSION["login"];
}

// Traitement du formulaire de commentaire
if (isset($_POST["commentaire"])) {
    $commentaire = $_POST["commentaire"];
    $date = date("Y-m-d H:i:s");

    // Vérification du commentaire pour empêcher les caractères ' et "
    if (preg_match("/['\"]/", $commentaire)) {
        echo "Le commentaire ne doit pas contenir les caractères ' et \".";
    } else {
        // Insertion du nouveau commentaire dans la base de données
        $stmt = $pdo->prepare("INSERT INTO commentaires (commentaire, id_utilisateur, date) SELECT ?, id, ? FROM users WHERE login = ?");
        $stmt->execute([$commentaire, $date, $login]);
        echo "Commentaire inséré avec succès.";
    }
}

// Récupération des commentaires depuis la base de données avec les informations des utilisateurs
$stmt = $pdo->prepare("SELECT commentaires.id, commentaire, id_utilisateur, date, login FROM commentaires INNER JOIN users ON commentaires.id_utilisateur = users.id ORDER BY date DESC");
$stmt->execute();
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>