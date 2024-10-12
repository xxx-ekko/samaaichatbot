<!DOCTYPE html>
<html lang="fr">
<!-- welcome.blade/php sadikh-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur ARTIFY HOUSE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href='css/chat.css'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <span class="navbar-title">SamaAIchatbot</span>
        </div>
        <div class="navbar-right">
            <a href="#" class="new-chat">New Chat</a>
            <button class="stop-conversation">Arrêter la conversation</button>
        </div>
    </nav>




    <div id="chatbot-container">
        <div id="chatbot">
            <div class="greeting" id="welcome-section">
                <video autoplay loop muted class="robot-video">
                    <source src="\videos\vidbot2.webm" type="video/mp4">
                    Your browser does not support the video tag.
                </video> <br>
                <h1>{{ $prenomNom }}</h1>
                <h2>De quoi avez-vous besoin <br> aujourd'hui ?</h2>
            </div>



            <div id="chat-messages"></div>

            <div id="typing-indicator">samaAI est en train d'écrire...</div>

            <div class="frequent-questions">
                @foreach($questions as $question)
                <div class="frequent-question" onclick="remplirQuestionEtEnvoyer('{{$question->question}}')">
                    {{$question->question}}
                </div>
                @endforeach
            </div>

            <!-- Conteneur pour le groupe d'input -->
            <div class="input-group-wrapper">
                <div class="input-group">
                    <textarea id="user-input" placeholder="Posez votre question..." onkeydown="checkEnter(event)"></textarea>
                    <div class="input-group-append">
                        <button onclick="envoyerQuestion()">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
                <div class="input-hint">
                    Open source AI chatbot built by MadiopThiam with ai Gemini
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
</body>

</html>