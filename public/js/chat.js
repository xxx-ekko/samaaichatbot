function envoyerQuestion() {
    let question = document.getElementById('user-input').value;

    // Ne rien faire si le champ est vide ou ne contient que des espaces
    if (question.trim() === '') return;

    const welcomeSection = document.getElementById('welcome-section');
    welcomeSection.classList.add('hidden');

    // Afficher le message de l'utilisateur avec une icône
    afficherMessage(
        `<span class="icon-user"></span> ${question}`,
        'user-message'
    );

    // Vider le champ de saisie
    document.getElementById('user-input').value = '';

    // Désactiver le bouton envoyer
    let sendButton = document.querySelector('.input-group-append button');
    sendButton.classList.remove('active');

    // Cacher les questions fréquentes
    document.querySelector('.frequent-questions').style.display = 'none';

    // Afficher l'indicateur de saisie
    document.getElementById('typing-indicator').style.display = 'block';

    axios.post('/samaaichatbot', {
        question: question
    })
        .then(function (response) {
            // Masquer l'indicateur de saisie
            document.getElementById('typing-indicator').style.display = 'none';

            // Afficher la réponse du bot avec un effet d'écriture
            ecrireMessage(response.data.reponse, 'bot-message');
        })
        .catch(function (error) {
            console.error(error);
        });
}

function ecrireMessage(message, type) {
    const messageContainer = document.createElement('div');
    messageContainer.classList.add('message', type);
    document.getElementById('chat-messages').appendChild(messageContainer);
    messageContainer.innerHTML = `${message} <span class="icon-bot"></span>`; // Ajouter l'icône

    // Effet d'écriture
    let i = 0;
    const typingSpeed = 20; // Vitesse de l'écriture (en millisecondes)

    function typer() {
        if (i < message.length) {
            messageContainer.innerHTML = `<span class="icon-bot"></span> ${message.slice(0, i + 1)}`;
            i++;
            setTimeout(typer, typingSpeed);
        } else {
            messageContainer.innerHTML = `<span class="icon-bot"></span> ${message}`; // Afficher le message complet
        }
    }

    typer();
}



function afficherMessage(message, type) {
    const messageContainer = document.createElement('div');
    messageContainer.classList.add('message', type);

    // Insère le contenu du message en tant que HTML
    messageContainer.innerHTML = message;

    const chatMessages = document.getElementById('chat-messages');
    chatMessages.appendChild(messageContainer);
    chatMessages.scrollTop = chatMessages.scrollHeight; // Pour faire défiler vers le bas automatiquement
}


function remplirQuestionEtEnvoyer(question) {
    document.getElementById('user-input').value = question;
    envoyerQuestion();
}

// Vérifie si la touche "Entrée" est pressée pour envoyer la question
function checkEnter(event) {
    if (event.key === 'Enter') {
        event.preventDefault();  // Empêche le retour à la ligne
        envoyerQuestion();       // Envoie la question
    }
}


// Mise à jour du bouton envoyer en fonction du contenu de l'input
document.getElementById('user-input').addEventListener('input', function () {
    let userInput = document.getElementById('user-input').value;
    let sendButton = document.querySelector('.input-group-append button');

    if (userInput.trim() === '') {
        sendButton.classList.remove('active');
        sendButton.disabled = true; // Désactive le bouton quand l'input est vide
    } else {
        sendButton.classList.add('active');
        sendButton.disabled = false; // Active le bouton si l'input contient du texte
    }
});

document.getElementById('user-input').addEventListener('input', function () {
    this.style.height = 'auto'; // Réinitialiser la hauteur
    this.style.height = (this.scrollHeight) + 'px'; // Ajuster en fonction du contenu
});
