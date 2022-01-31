<?php

if (isset($_POST['submit'])) {
    $username = trim(strip_tags($_POST['username']));
    $userMessage = trim(strip_tags(($_POST['userMessage'])));

    $array = [
        "username" => $username,
        "userMessage" => $userMessage,
    ];

    $array = json_encode($array);

    $jsonMessage = file_put_contents("../data/last_message.json", $array);
    json_encode($jsonMessage);


    header('Location: index.php?page=contact&m=1');
} else {
    header('Location: index.php');
}
