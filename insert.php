
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Insert</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
                require_once 'login.php';
                $conn = new mysqli($hn, $un, $pw, $db);
                if ($conn->connect_errorr) die("Fatal error");

                if (isset($_POST['author']) &&
                    isset($_POST['title']) &&
                    isset($_POST['type']) &&
                    isset($_POST['year']))
                    {
                        $author = get_post($conn, 'author');
                        $title = get_post($conn, 'title');
                        $type = get_post($conn, 'type');
                        $year = get_post($conn, 'year');
                        $query = "INSERT INTO classics VALUES('$author', '$title','$type', '$year')";
                        $result = $conn->query($query);
                        if (!$result) echo "INSERT FAILED";
                        echo "Success";
                    }
                echo <<<_END
                <form action="insert.php" method="post">
                Author <input type="text" name="author"><br>
                Title <input type="text" name="title"><br>
                Category <input type="text" name="type"><br>
                Year <input type="text" name="year"><br>
                <input type="submit" value="Add record"><br>
                </form>
_END;
                $result->close();
                $conn->close();

                function get_post($conn, $var)
                {
                    return $conn->real_escape_string($_POST[$var]);
                }
            ?>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>