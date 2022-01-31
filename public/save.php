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

    // send a mail with the username and content
    $to = "xxxx@xxxxx.xxx";
    $subject = "New message from " . $username;
    $message = $userMessage;
    $from = 'From: xxxx@xxxxx.xxx';

    if (mail($to, $subject, $message, $from)) {
        header('Location: index.php?page=contact&m=0');
    } else {
        header('Location: index.php?page=contact&m=1');
    }


} else {
    header('Location: index.php');
}
