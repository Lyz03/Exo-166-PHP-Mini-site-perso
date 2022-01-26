<?php

$content = file_get_contents(__DIR__ . '/../data/last_message.json');

$content = json_decode($content, true);

foreach ($content as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}