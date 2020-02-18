
function envoiForm(event) {
  if (this.elements.lieu.value === "") {
    alert("Le lieu est vide.");
    event.preventDefault();
  }
}

var formulaire = document.getElementById("unId");
formulaire.addEventListener("submit", envoiForm, false);
