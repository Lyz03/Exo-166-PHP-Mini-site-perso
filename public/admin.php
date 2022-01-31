<?php
require __DIR__ . '/../lib/functions.php';

getPart('header');

getContent();

echo '<button id="showLastMessage">voir le dernier message</button>';

$content = file_get_contents(__DIR__ . '/../data/last_message.json');

$content = json_decode($content, true);

echo '<div id="lastMessage">';
foreach ($content as $key => $value) {
    echo '<span>' . $key . ' : ' . $value . '</span><br>';
}
echo '</div>';

getPart('footer');