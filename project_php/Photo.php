<?php

$fichier = "contact.txt";

$nouveauxContacts = ["Alice Dupont", "John Doe", "Jean Martin"];

if (!file_exists($fichier)) {
    die("Le fichier contact.txt n'existe pas !");
}

$contactsExistants = file($fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($nouveauxContacts as $contact) {
    if (!in_array($contact, $contactsExistants)) {
        $contactsExistants[] = $contact;  
    }
}

file_put_contents($fichier, implode("\n", $contactsExistants));

echo "Contacts mis à jour avec succès !";
