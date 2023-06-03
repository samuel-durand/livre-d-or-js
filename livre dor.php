<?php
include('config.php');
session_start();
date_default_timezone_set("Europe/Paris");

// Récupération des commentaires depuis la base de données avec les informations des utilisateurs
$stmt = $pdo->prepare("SELECT commentaires.id, commentaire, id_utilisateur, date, login FROM commentaires INNER JOIN users ON commentaires.id_utilisateur = users.id ORDER BY date DESC");
$stmt->execute();
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
    <script defer src="comment.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="footer.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.php') ?>

    <div class="container mx-auto mt-5 px-4">
        <h1 class="mb-4 text-3xl font-bold">Livre d'or</h1>

        <?php if (isset($_SESSION['login'])): ?>
        <form id="commentaire-form">
            <div class="mb-4">
                <label for="commentaire" class="text-lg font-semibold">Commentaire :</label>
                <textarea id="commentaire" name="commentaire" class="form-control commentaire" required></textarea>
            </div>
            <button type="submit" id="submit-button" class="btn btn-primary">Poster</button>
        </form>
        <?php else: ?>
        <p>Connectez-vous pour laisser un commentaire.</p>
        <?php endif; ?>

        <h2 class="mt-5 mb-4 text-2xl font-bold">Commentaires</h2>
        <ul class="commentaires-liste">
            <?php foreach ($commentaires as $commentaire) { ?>
            <li class="commentaire-item">
                <strong><?php echo $commentaire["login"]; ?></strong>
                <small class="text-muted">le <?php echo date('d/m/Y H:i', strtotime($commentaire["date"])); ?></small>
                <p><?php echo $commentaire["commentaire"]; ?></p>
            </li>
            <?php } ?>
        </ul>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com/2.2.19/tailwind.min.js"></script>

    <?php include('footer.php') ?>


</body>
</html>

