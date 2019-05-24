
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Practical PHP</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
            printf("Here is an example of %d format strings", 3);
            echo "<pre>";
            printf("Here is another %s example", "brilliant");
            echo "</pre>";
            printf("<div class=\"eg\" style=\"background:#%X%X%X;\"><p>Here is some content for you</p></div>", 234, 29, 158);
            echo "<br>";
            printf("here is a calulation %.2f<br>", 123.43 / 12);
            printf("here is a calulation %f<br>", 123.43 / 12);
            echo "<br>";
            echo "<br>";
            $out = sprintf("%X%X%X", 200, 56, 200);
            printf("<p style=\"background: #$out;\">Hey look ma, I'm using a sprintf</p>");
            echo "<br>";
            $tm = date(DATE_RSS);
            echo $tm;
            echo "<br>";
            if (file_exists('include.php')) echo "include.php exisits";
            echo "<br>";
            //testfile.php
            $fh = fopen("testfile.txt", 'w') or die("failed to create file");

            $text = <<<_END
            line 1
            line 2
            line 3
            Line 4 here we go again.
_END;
            fwrite($fh, $text) or die("could not write");
            fclose($fh);
            echo "File 'testfile.txt' written successfully";

            echo "<br>";
            $fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack the require preivledges");
            $line = fread($fh, filesize("testfile.txt"));
            fclose($fh);
            echo $line;
            echo "<br>";
            copy('testfile.txt', 'testfile-2.txt') or die('could not copy file');
            echo 'Successfully copied to testfile-2.txt';
            echo "<br>";
            $fhh = fopen('testfile-2.txt', 'a+') or die('failed to open file'); $text2 = <<<_END
            This is odd behaviour;
_END;
            fwrite($fhh, $text2) or die('problem writing');
            fclose($fhh);
            $l2 = fopen("testfile-2.txt", 'r') or die("Error Will");
            $onao = fread($l2, filesize("testfile-2.txt"));
            fclose($onao);
            echo $onao;
            echo "<br>";
            if (!rename("testfile-2.txt", "trash.txt"))
                echo "Could not move file";
            else echo "Move successful!";
            if (!unlink('trash.txt'))
                echo "Cannot delte trash.txt";
            else echo "Trash.txt deleted";
            echo "<br>";
            $fh = fopen("testfile.txt", 'r+') or die("error");
            $text = fgets($fh);

            if (flock($fb, LOCK_EX))
            {
                fseek($fh, 0, SEEK_END);
                fwrite($fh, "$text") or die("COuld not write file");
                // flock($fh, LOCK_UN);
            }
            fclose($fh);
            echo "File updated";
            echo "<br>";
            $fh = fopen("testfile.txt", 'r+') or die("bugger");
            $text = fread($fh, filesize("testfile.txt"));
            fclose($text);
            echo $text;
            $fh = fopen("testfile.txt", 'a+') or die("bugger");
            $txt = <<<_END
            Boomshakalaka!
_END;
            fwrite($fh, $txt) or die("File is locked");
            fclose($fh);
            echo "<pre>";
            echo file_get_contents("testfile.txt");
            echo "</pre>";
            echo <<<_END
            <form method='post' action='practical-php.php' enctype='multipart/form-data'>
            Select File: <input type='file' name='filename' size ='10'>
            <input type='submit' value='Uplaod'>
            </form>
_END;
            if ($_FILES)
            {
                $name = $_FILES['filename']['name'];
                switch($_FILES['filename']['type'])
                {
                    case 'image/jpeg': $ext = 'jpg'; break;
                    case 'image/png': $ext = 'png'; break;
                    default: $ext = ''; break;
                }
                if ($ext)
                {
                    $n = "image.$ext";
                    move_uploaded_file($_FILES['filename']['tmp_name'], $n);
                    echo "Uploaded image '$name'<br><img src='$n'";
                }
                else echo "$name is not accepted file format";
            }
            else echo "No image is uploaded";

            $cmd = "ls -alt";
            exec(escapeshellcmd($cmd), $output, $status);

            if ($status) echo "Exec failed";
            else{
                echo "<pre>";
                foreach($output as $line) echo htmlspecialchars("$line\n");
                echo "</pre>";
            }
            ?>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>