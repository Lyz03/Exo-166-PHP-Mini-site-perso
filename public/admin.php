<?php


// on inclue le fichier qui contient nos fonctions
require __DIR__ . '/../lib/functions.php';

// l'exemple avec le header, à vous de jouer pour le reste
getPart('header');

getContent();

echo '<button id="showLastMessage">voir le dernier message</button>';

$content = file_get_contents(__DIR__ . '/../data/last_message.json');

$content = json_decode($content, true);

echo '<div id="lastMessage">';
echo '<p>Last message</p>';
foreach ($content as $key => $value) {
    echo '<span>' . $key . ' : ' . $value . '</span><br>';
}
echo '</div>';

getPart('footer');




