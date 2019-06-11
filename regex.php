
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Regular Expressions</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
               $n = preg_match_all("/cats/i", "Cats are crazy. I like cats.", $match);
               echo "$n<br>";
               for ($j=0 ; $j < $n ; ++$j) echo $match[0][$j]." ";
            ?>
        </div>
        <!-- <script src="js/index.js"></script> -->
    </body>
</html>