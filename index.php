<?php
// Autorise Google Sites à lire la page
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

echo "<h1>Bonjour !</h1><p>Contenu chargé depuis Render.</p>";
?>