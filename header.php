<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="header.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="livre dor.php">livre d'or</a></li>
            <?php if (isset($_SESSION['login'])): ?>
                <li><a href="profil.php">profil</a></li>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php else: ?>
                <li><a href="register.php">Inscription</a></li>
                <li><a href="login.php">Se connecter</a></li>

            <?php endif; ?>                  
        </ul>
    </nav>
</header>
</body>
</html>