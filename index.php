<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="footer.js"></script>
    <title>accueil</title>
</head>
<body class=" text-white">

<?php include ('header.php') ?>

<div class="container mx-auto px-4 h-screen flex justify-center items-center">
    <p id="welcome" class="text-center text-lg">
        Bienvenue sur mon site du livre d'or ! Ce site vous permet de partager vos commentaires et vos impressions avec d'autres utilisateurs. Que vous soyez un visiteur régulier ou que vous découvriez le site pour la première fois, je suis ravi de vous accueillir.

        Vous pouvez consulter les commentaires des autres utilisateurs sur la page "Livre d'or" et laisser votre propre commentaire en vous connectant à votre compte. Si vous n'avez pas encore de compte, vous pouvez vous inscrire en quelques clics.
    </p>
</div>

<?php include('footer.php') ?>
    
</body>
</html>

