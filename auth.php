<?php

require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db);

if ($connection->connect_error) die("Fatal error");


// $query = "CREATE TABLE users (
//     forename VARCHAR(32) NOT NULL,
//     surname VARCHAR(32) NOT NULL,
//     username VARCHAR(32) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL)";



// $result = $connection->query($query);
// if (!$result) die("Fatal Error: creating table");


$forename = 'Darius';
$surname = 'Rucker';
$username = 'hootie';
$password = 'blowfish';
$hash = password_hash($password, PASSWORD_DEFAULT);

add_user($connection, $forename, $surname, $username, $hash);

function add_user($connection, $fn, $sn, $un, $pw)
{
    $stmt = $connection->prepare('INSERT INTO users VALUES(?,?,?,?)');
    $stmt->bind_param('ssss', $fn, $sn, $un, $pw);
    $stmt->execute();
    $stmt->close();
}

echo  <<<_END
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Auth</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <h1>Hello World</h1>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>

_END;

?>