<?php

// Inclusion du fichier de configuration de la base de données
include('config.php');

// Démarrage de la session
session_start();

// Vérification si les données ont été soumises
if (isset($_POST['login']) && isset($_POST['password'])) {
  // Récupération des données soumises dans le formulaire
  $login = htmlspecialchars($_POST['login'], ENT_QUOTES) ;
  $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

  // Recherche de l'utilisateur correspondant dans la base de données
  $stmt = $pdo->prepare('SELECT * FROM users WHERE login = :login');
  $stmt->execute(['login' => $login]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // Vérification si l'utilisateur a été trouvé et que le mot de passe est correct
  if ($user && password_verify($password, $user['password'])) {
    // Sauvegarde de l'utilisateur connecté dans la session
    $_SESSION['login'] = $login;

    // Redirection vers la page souhaitée
    header('Location: livre dor.php');
    exit;
  } else {
    // Création du tableau de réponse
    $response = ['message' => 'Mauvais login ou mot de passe.'];

    // Encodage de la réponse en JSON et envoi au client
    echo json_encode($response);
  }
}

?>

