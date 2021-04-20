// récupère l'id de la fenêtre dans une variable
const modal = document.getElementById('myModal');

// récupère la classe du span pour fermer la fenêtre
const span = document.getElementById('closeBtn');

// ferme la fenêtre quand l'utilisateur appuie sur la croix
span.addEventListener('click', function () {
    modal.style.display = 'none';
});

// ferme la fenêtre si l'utilisateur clique n'importe où en dehors
window.addEventListener('click', function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});
