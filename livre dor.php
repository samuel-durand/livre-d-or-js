<?php

include('commentaire.action.php');





?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styls.css">
</head>
<body>
    <?php include ('header.php') ?>

    <div class="container mt-5">
        <h1 class="mb-4">Livre d'or</h1>
        
        <?php if (isset($_SESSION['login'])): ?>
        <form id="commentaire-form">
            <div class="form-group">
                <label for="commentaire">Commentaire :</label>
                <textarea id="commentaire" name="commentaire" class="form-control commentaire" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Poster</button>
        </form>
        <?php else: ?>
        <p>Connectez-vous pour laisser un commentaire.</p>
        <?php endif; ?>
        
        <h2 class="mt-5 mb-4">Commentaires</h2>
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
    <?php include('footer.php') ?>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="comment.js"></script>
</body>
</html>

