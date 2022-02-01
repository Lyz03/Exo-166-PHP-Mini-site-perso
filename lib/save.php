<?php

if (isset($_POST['submit'])) {
    $username = trim(strip_tags($_POST['username']));
    $userMessage = trim(strip_tags(($_POST['userMessage'])));

    // save all messages
    file_put_contents('../data/usersMessages.txt', $username . ', ' . $userMessage . "\n", FILE_APPEND);

    $array = [
        "username" => $username,
        "userMessage" => $userMessage,
    ];

    $array = json_encode($array);

    // save the last message
    $jsonMessage = file_put_contents("../data/last_message.json", $array);
    json_encode($jsonMessage);

    // send a mail with the username and content
    $to = "xxxx@xxxxx.xxx";
    $subject = "New message from " . $username;
    $message = wordwrap($userMessage, 70, "\r\n");
    $headers = 'From: xxxx@xxxxx.xxx';

    if (mail($to, $subject, $message, $headers)) {
        header('Location: index.php?page=contact&m=0');
    } else {
        header('Location: index.php?page=contact&m=1');
    }


} else {
    header('Location: index.php');
}
