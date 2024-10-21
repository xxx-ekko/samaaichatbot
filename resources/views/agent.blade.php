<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion avec un agent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href='css/agent_chat.css'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <span class="navbar-title">SamaAgent</span>
        </div>
        <div class="navbar-right">
            <button class="getback" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i> Retour
            </button>

            <button class="stop-conversation">
                <i class="fas fa-stop-circle"></i> STOP
            </button>
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
                <h2 class="fade-in">Comment pourrons nous <br> vous aider ?</h2>
            </div>



            <div id="chat-messages"></div>

            <div id="typing-indicator">samaAgent est en train d'écrire...</div>


            <!-- Conteneur pour le groupe d'input -->
            <div class="input-group-wrapper">
                <div class="input-group">
                    <textarea id="user-input" placeholder="Posez votre question..." onkeydown="checkEnter(event)"></textarea>
                    <div class="input-group-append">
                        <button onclick="envoyerMessageAgent()">
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
    <script src="{{ asset('js/agent_chat.js') }}"></script>
</body>

</html>