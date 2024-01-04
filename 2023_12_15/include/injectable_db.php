<?php


$conn = new mysqli(
    '127.0.0.1',
    'root',
    'root',
    'zdupy',
    3306
);

function insertToMessages($message): void
{
    global $conn;

    $message = $conn->real_escape_string($message);

//    $message = htmlspecialchars($message);

//    $message = strip_tags($message);

    $message = htmlentities($message);

    $sql = "INSERT INTO messages (content) VALUES ('$message')";

    $conn->query($sql);
}

function getMessages(): array
{
    global $conn;

    $sql = "SELECT * FROM messages";

    $result = $conn->query($sql);

    $messages = [];

    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    return $messages;
}