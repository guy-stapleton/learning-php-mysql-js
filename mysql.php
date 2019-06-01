
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Practice Connecting Mysql with PHP</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
                echo "Hello World!";
            ?>
            <?php

            require_once 'login.php';
            $conn = new mysqli($hn, $un, $pw, $db);
            if ($conn->connect_error) die("Fatal error 1");

            $query = 'SELECT * FROM classics';
            $result = $conn->query($query);
            if (!$result) die("Fatal error 2");

            $rows = $result->num_rows;

            // for ($j = 0; $j < $rows; ++$j)
            // {
            //  $result->data_seek($j);
            //  echo 'Author: ' .htmlspecialchars($result->fetch_assoc()['author']) . '<br>';
            //  $result->data_seek($j);
            //  echo 'Title: ' .htmlspecialchars($result->fetch_assoc()['title']) . "<br>";
            //  $result->data_seek($j);
            //  echo 'Category: ' .htmlspecialchars($result->fetch_assoc()['type']) . "<br>";
            //  $result->data_seek($j);
            //  echo 'Year: ' .htmlspecialchars($result->fetch_assoc()['year']) . "<br>";
            // }
            echo "<br><br>";
            echo "here are the results<br><br>";
            for ($j = 0; $j < $rows; ++$j)
            {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                echo 'Author: ' . htmlspecialchars($row['author']) . '<br>';
                echo 'Title: ' . htmlspecialchars($row['title']) . '<br>';
                echo 'Type: ' . htmlspecialchars($row['type']) . '<br>';
                echo 'Year: ' . htmlspecialchars($row['year']) . "<br><br>";
            }
            $result->close();
            $connection->close();
?>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>