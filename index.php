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
