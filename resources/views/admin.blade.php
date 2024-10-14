<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Chatbot</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Chatbot Admin</h2>
            <ul>
                <li><a href="#">Discussions en attente</a></li>
                <li><a href="#">Historique</a></li>
                <li><a href="#">Déconnexion</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="chat-header">
                <h3>Discussion avec [Nom du client]</h3>
            </div>
            <div class="quick-replies">
              <h3>Réponses rapides</h3>
              <ul>
                  <li data-message="Bonjour ! Comment puis-je vous aider aujourd'hui ?">Bonjour ! Comment puis-je vous aider aujourd'hui ?</li>
                  <li data-message="Nous proposons une large sélection de peintures, sculptures et photographies.">Nous proposons une large sélection de peintures, sculptures et photographies.</li>
                  <li data-message="Pour plus d'informations sur une œuvre spécifique, veuillez me fournir son titre ou son numéro d'identification.">Pour plus d'informations sur une œuvre spécifique, veuillez me fournir son titre ou son numéro d'identification.</li>
                  <li data-message="Nos œuvres d'art sont disponibles à l'achat en ligne et en galerie.">Nos œuvres d'art sont disponibles à l'achat en ligne et en galerie.</li>
                  <li data-message="N'hésitez pas à me contacter si vous avez d'autres questions.">N'hésitez pas à me contacter si vous avez d'autres questions.</li>
                  <li data-message="Je vous souhaite une excellente journée !">Je vous souhaite une excellente journée !</li>
              </ul>
          </div>
            <div class="chat-history">
                </div>
            <div class="chat-input">
                <textarea placeholder="Ecrire un message..."></textarea>
                <button>Envoyer</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>