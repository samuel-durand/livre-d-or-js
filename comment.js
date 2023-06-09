document.querySelector('#commentaire-form').addEventListener('submit', (event) => {
  event.preventDefault(); // Empêche le rechargement de la page

  // Récupération des données du formulaire
  const formData = new FormData(event.target);

  // Envoi de la requête
  fetch('commentaire.action.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    // Redirection vers la page désirée
    window.location.replace("livre dor.php");
  })
  .catch(error => {
    console.error(error);
  });
});