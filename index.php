<?php
// Nous creons notre fichier index.php

function salutation() {
    echo "Bonjour Mon ami";
}

// salutation();

$phrase = "Sidi va a l'ecole";
$ok = str_replace('Sidi', 'popo', $phrase);
echo $ok;