<?php

include('commentaire.action.php');


if (!isset($_SESSION["login"])) {
    $commentaire_disable = true;
} else {
    $commentaire_disable = false;
    $login = $_SESSION["login"];
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
</head>
<body>
<?php include ('header.php') ?>

    <h1>Livre d'or</h1>
    
    <form id="commentaire-form">
        <label for="commentaire">Commentaire :</label><br>
        <textarea id="commentaire" name="commentaire" required></textarea><br><br>
        
        <input type="submit" value="Poster">
    </form>
    
    <h2>Commentaires</h2>
    <ul id="commentaires-liste">
        <?php foreach ($commentaires as $commentaire) { ?>
            <li>
                <strong><?php echo $commentaire["login"]; ?></strong> le <?php echo $commentaire["date"]; ?><br>
                <?php echo $commentaire["commentaire"]; ?>
            </li>
        <?php } ?>
    </ul>
    
    <script src="comment.js">

    </script>
</body>
</html>
