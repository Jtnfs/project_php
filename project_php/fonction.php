<?php

$dico = [
    "chat" => "cat",
    "chien" => "dog",
    "maison" => "house",
    "voiture" => "car",
    "arbre" => "tree",
    "soleil" => "sun",
    "lune" => "moon",
    "mer" => "sea",
    "montagne" => "mountain",
    "ordinateur" => "computer",
    "telephone" => "phone",
    "table" => "table",
    "chaise" => "chair",
    "porte" => "door",
    "fenetre" => "window",
    "livre" => "book",
    "stylo" => "pen",
    "ville" => "city",
    "pays" => "country",
    "ecole" => "school",
    "ami" => "friend",
    "famille" => "family",
    "professeur" => "teacher",
    "eleve" => "student",
    "travail" => "work",
    "argent" => "money",
    "eau" => "water",
    "feu" => "fire",
    "terre" => "earth",
    "vent" => "wind",
    "rouge" => "red",
    "bleu" => "blue",
    "vert" => "green",
    "noir" => "black",
    "blanc" => "white",
    "beau" => "beautiful",
    "rapide" => "fast",
    "lent" => "slow",
    "fort" => "strong",
    "faible" => "weak",
    "grand" => "tall",
    "petit" => "small",
    "froid" => "cold",
    "chaud" => "hot",
    "manger" => "eat",
    "boire" => "drink",
    "marcher" => "walk",
    "parler" => "talk",
    "dormir" => "sleep"
];

function translate(string $word, string $direction): string 
{
    global $dico; 
    $word_clean = strtolower($word); 
    $result = null; 
    
    if ($direction == 'toEnglish') {
        if (array_key_exists($word_clean, $dico)) {
            $result = $dico[$word_clean];
        }
    
    } else if ($direction == 'toFrench') {
        $traduction_fr = array_search($word_clean, $dico);
        
        if ($traduction_fr !== false) {
            $result = $traduction_fr;
        }
    }
    
    if ($result === null) {
        return "MOT INCONNU"; 
    }
    
    return $result;
}