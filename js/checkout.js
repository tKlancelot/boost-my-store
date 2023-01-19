

const changePlaceholder = () => {
    document.getElementById("billing_first_name").placeholder = "prénom";
    document.getElementById("billing_last_name").placeholder = "nom";
    document.getElementById("billing_company").placeholder = "Nom de l’entreprise (facultatif)";

}

window.addEventListener('DOMContentLoaded', (event) => {
    changePlaceholder();
});
