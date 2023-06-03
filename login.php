<?php 

include('config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="footer.js"></script>

    <title>connexion</title>

</head>
<body>
    <?php include('header.php') ?>
    <h1>Connexion</h1>
    <main>
    <form method="post" id="mon-formulaire">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <button type="submit">se connecter</button>
</form>
</main>
<script src="login.js"></script>

<?php include('footer.php') ?>



</body>
</html>