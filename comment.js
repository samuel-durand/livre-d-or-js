document.getElementById("commentaire-form").addEventListener("submit", async function (e) {
  e.preventDefault();

  const formData = new FormData(e.target);
  formData.append("submit", "true"); 

  try {
    const response = await fetch("commentaire.action.php", {
      method: "POST",
      body: formData
    });

    if (response.ok) {
      const result = await response.json();
      console.log(result);

      if (result.success) {
        showAlert("Commentaire posté !");
        updateComments(); // Met à jour les commentaires après l'envoi du formulaire
      } else {
        showAlert(result.message);
      }
    } else {
      console.error("Erreur lors de l'envoi du formulaire:", response.statusText);
    }
  } catch (error) {
    console.error("Erreur lors de l'envoi du formulaire:", error);
  }
});

function showAlert(message) {
  alert(message);
}

async function updateComments() {
  try {
    const randomParam = Math.random().toString(36).substring(7); // Paramètre de requête aléatoire
    const response = await fetch(`commentaire.action.php?_=${randomParam}`);
    const commentaires = await response.json();
    console.log(commentaires);

    const commentairesListe = document.querySelector(".commentaires-liste");
    commentairesListe.innerHTML = "";

    for (const commentaire of commentaires) {
      const li = document.createElement("li");
      li.classList.add("commentaire-item");
      li.innerHTML = `
        <strong>${commentaire.login}</strong>
        <small class="text-muted">le ${commentaire.date}</small>
        <p>${commentaire.commentaire}</p>
      `;

      commentairesListe.appendChild(li);
    }
  } catch (error) {
    console.error("Erreur lors de la récupération des commentaires:", error);
  }
}


// Appel initial pour afficher les commentaires au chargement de la page
updateComments();

