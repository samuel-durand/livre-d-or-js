<?php 
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="footer.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="style.css">
    <title>inscription</title>
</head>
<body class="bg-gray-900 text-white">
  <?php include('header.php') ?>

  <h1 class="text-center text-3xl font-bold mt-8">Inscription</h1>
  <main class="max-w-md mx-auto mt-8">
    <form id="mon-formulaire-register" method="POST">
      <div class="mb-4">
        <label for="login" class="text-lg">Login :</label>
        <input type="text" id="login" name="login" required class="w-full px-4 py-2 mt-2 bg-gray-800 rounded-lg text-gray-100 focus:outline-none focus:border-blue-500">
      </div>

      <div class="mb-4">
        <label for="password" class="text-lg">Mot de passe :</label>
        <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-2 bg-gray-800 rounded-lg text-gray-100 focus:outline-none focus:border-blue-500">
      </div>

      <button type="submit" class="w-full py-2 px-4 mt-6 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors">S'inscrire</button>
    </form>
  </main>

  <script>
    document.getElementById("mon-formulaire-register").addEventListener("submit", async function (e) {
      e.preventDefault();

      const formData = new FormData(e.target);
      formData.append("submit", "true"); 
      const response = await fetch("register.action.php", {
        method: "POST",
        body: formData
      });

      if (response.ok) {
        const result = await response.json();
        console.log(result);

        if (result.success) {
          showAlert("Vous êtes inscrit !");
        } else {
          showAlert(result.message);
        }
      } else {
        console.error("Erreur lors de l'envoi du formulaire:", response.statusText);
      }
    });

    function showAlert(message) {
      alert(message);
    }
  </script>

  <?php include('footer.php') ?>
    
</body>
</html>
