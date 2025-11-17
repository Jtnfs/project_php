<?php

// Attention : le nom ici doit être EXACTEMENT le nom du fichier créé au-dessu
require 'fonction.php';

$resultat_traduction = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $mot_saisi = $_POST['word'] ?? '';
    $sens_saisi = $_POST['direction'] ?? 'toEnglish';
    
    if (!empty($mot_saisi)) {
        $traduction = translate($mot_saisi, $sens_saisi);
        
        if ($traduction == "MOT INCONNU") {
            $resultat_traduction = "Le mot '" . htmlspecialchars($mot_saisi) . "' n'est pas dans le dictionnaire.";
        } else {
            $resultat_traduction = "La traduction de '" . htmlspecialchars($mot_saisi) . "' est : **" . $traduction . "**";
        }
    } else {
        $resultat_traduction = "Erreur : vous n'avez pas tapé de mot.";
    }
}

require 'traducteur.phtml';