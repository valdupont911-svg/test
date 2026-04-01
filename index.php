<?php
// 1. LES HEADERS (Indispensables pour que Google Site puisse lire le contenu)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

// 2. LE CONTENU HTML (On ferme la balise PHP pour écrire du HTML pur)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        /* On fait un style très visible pour être sûr que ça marche */
        body { 
            background-color: #ff0000; /* Fond rouge vif */
            color: white; 
            font-family: 'Arial Black', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .success-box {
            border: 10px solid white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <div class="success-box">
        <h1>🚀 TEST RÉUSSI !</h1>
        <p>Ce contenu vient de <strong>Render</strong> et il a remplacé ton "Bonsoir".</p>
        <p>L'URL de ton site est toujours Google, mais je contrôle tout l'écran.</p>
    </div>
</body>
</html>
