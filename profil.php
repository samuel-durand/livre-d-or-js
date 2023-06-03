<?php
session_start();
// Inclusion du fichier de configuration de la base de données
include('config.php');
include('update.login.php');
include('update.pass.php');

// Vérification si l'utilisateur est connecté
if (isset($_SESSION['login'])) {
  // Récupération des informations de l'utilisateur connecté depuis la base de données
  $stmt = $pdo->prepare('SELECT * FROM users WHERE login = :login');
  $stmt->execute(['login' => $_SESSION['login']]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);


} else {
  // Redirection vers la page de connexion
  header('Location: login.php');
  exit();
}


if (date("H") < 18)
$bienvenue = "bonjour et bienvenue " .
$_SESSION['login'];
else 
$bienvenue = "bonsoir et bienvenue " .
$_SESSION['login'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="footer.js"></script>

</head>
<body >

  <?php include('header.php') ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-secondary">
                    <div class="card-header text-center">
                        <h1 class="text-light mb-0">Profil</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="text-light"><?php echo $bienvenue ?></h3>

                        <form id="mon-formulaire-update-log" method="POST">
                            <div class="form-group">
                                <label class="text-light" for="login">Nouveau login :</label>
                                <input class="form-control" type="text" id="login" name="login" required>
                            </div>

                            <button class="btn btn-primary btn-block" type="submit">Mettre à jour</button>
                        </form>

                        <form id="mon-formulaire-reset" method="POST">
                            <div class="form-group">
                                <label class="text-light" for="current_password">Mot de passe actuel :</label>
                                <input class="form-control" type="password" id="current_password" name="current_password" required>
                            </div>

                            <div class="form-group">
                                <label class="text-light" for="new_password">Nouveau mot de passe :</label>
                                <input class="form-control" type="password" id="new_password" name="new_password" required>
                            </div>

                            <button class="btn btn-primary btn-block" type="submit">Mettre à jour le mot de passe</button>
                        </form>

                        <button id="btn-deconnexion" class="btn btn-danger btn-block mt-3">Se déconnecter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="logout.js"></script>

    <?php include('footer.php') ?>

</body>
</html>
