<?php 
include('config.php');
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

    <title>connexion</title>

</head>
<body>
    <?php include('header.php') ?>
    <h1>Connexion</h1>
    <main class="max-w-md mx-auto mt-8">
  <form method="post" id="mon-formulaire" class="grid grid-cols-1 gap-4 md:grid-cols-2">
    <div>
      <label for="login" class="text-lg">Login:</label>
      <input type="text" name="login" id="login" required class="w-full px-4 py-2 mt-2 bg-gray-800 rounded-lg text-gray-100 focus:outline-none focus:border-blue-500">
    </div>

    <div>
      <label for="password" class="text-lg">Password:</label>
      <input type="password" name="password" id="password" required class="w-full px-4 py-2 mt-2 bg-gray-800 rounded-lg text-gray-100 focus:outline-none focus:border-blue-500">
    </div>

    <div class="md:col-span-2">
      <button type="submit" class="w-full py-2 px-4 mt-6 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors">Se connecter</button>
    </div>
  </form>
</main>




<script src="login.js"></script>

<?php include('footer.php') ?>



</body>
</html>