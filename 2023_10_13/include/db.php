<?php

/* - wersja proceduralna

$conn = mysqli_connect(
    '127.0.0.1',
    'php',
    'php',
    '4bg1',
    3306
);

// check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
    die;
} else {
    echo "Connection successful";
}

*/

// wersja obiektowa
$conn = new mysqli(
    '127.0.0.1',
    'php',
    'php',
    '4bg1',
    3306
);

if ($conn->connect_errno) {
    echo "Failed to connect: " . $conn->connect_errno;
    die;
}

function storeMessage(string $email, string $message): bool
{
    global $conn;

    $sql = sprintf(
        'INSERT INTO contact_messages (email, message) VALUES ("%s", "%s")',
        $email,
        $message
    );

    $result = $conn->query($sql);

    $conn->close();

    return $result;
}