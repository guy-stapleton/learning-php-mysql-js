
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Form Handling</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
                if (isset($_POST['username'])) $name = $_POST['username'];
                else $name = "(Not entered)";
                echo <<<_END
                Your name is: $name<br>
                <form action="formtest.php" method="POST">
                <label for="username">Username 
                <input id="username" type="text" name="username">
                </label>
                <input type="submit" value="Add user">
                </form>
_END;
            ?>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>