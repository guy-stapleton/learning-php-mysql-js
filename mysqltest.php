
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Mysql, PHP and Forms</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
              require_once 'login.php';
              $conn = new mysqli($hn, $un, $pw, $db);
              if ($conn->connect_error) die("Fatal error");
            

                if (isset($_POST['delete']) && isset($_POST['isbn']))
                {
                    $isbn = get_post($conn, 'isbn');
                    $query = "DELETE FROM classics WHERE isbn='$isbn'";
                    $result = $conn->query($query);
                    if (!$result) echo "DELETE failed<br><br>";
                }

                if (isset($_POST['author']) &&
                    isset($_POST['title']) &&
                    isset($_POST['type']) &&
                    isset($_POST['year']))
                    {
                        $author = get_post($conn, 'author');
                        $title = get_post($conn, 'title');
                        $type = get_post($conn, 'type');
                        $year = get_post($conn, 'year');
                        $isbn = get_post($conn, 'isbn');
                        $query = "INSERT INTO classics VALUES ('$author', '$title', '$type', '$year', '$isbn')";
                        $result = $conn->query($query);
                        if (!$result) echo "INSERT failed";
                    }

                    echo <<<_END
                    <form action="mysqltest.php" method="post"><pre>
                    Author <input type="text" name="author">
                    Title <input type="text" name="title">
                    Category <input type="text" name="type">
                    Year <input type="text" name="year">
                    ISBN <input type="text" name="isbn">
                    <input type="submit" value="ADD RECORD">
                    </pre></form>
_END;
                    $query = "SELECT * FROM classics";
                    $result = $conn->query($query);
                    if (!$result) die ("Databse access failed");

                    $rows = $result->num_rows;

                    for ($j = 0; $j < $rows; ++$j)
                    {
                        $row = $result->fetch_array(MYSQLI_NUM);

                        $r0 = htmlspecialchars($row[0]);
                        $r1 = htmlspecialchars($row[1]);
                        $r2 = htmlspecialchars($row[2]);
                        $r3 = htmlspecialchars($row[3]);
                        $r4 = htmlspecialchars($row[4]);
                        echo <<<_END
                        <pre>
                        Author $r0
                        Title $r1
                        Category $r2
                        Year $r3
                        ISBN $r4
                        </pre>
    
                        <form action='mysqltest.php' method='post'>
                        <input type='hidden' name='delete' value='yes'>
                        <input type='hidden' name='isbn' value='$r4'>
                        <input type='submit' value='DELETE RECORD'></form>
_END;
}

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