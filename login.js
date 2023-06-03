document.getElementById("mon-formulaire").addEventListener("submit", async function (e) {
  e.preventDefault();

  const formData = new FormData(e.target);
  formData.append("submit", "true"); 
  const response = await fetch("login.action.php", {
    method: "POST",
    body: formData
  });

  if (response.ok) {
    const result = await response.json();
    console.log(result);

    if (result.success) {
      showAlert("Vous êtes coonecter !");
      window.location.replace("livre dor.php");
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



