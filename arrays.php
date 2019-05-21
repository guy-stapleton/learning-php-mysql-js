
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Arrays</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <?php
                $paper[] = "Color";
                $paper[] = "Inkjet";
                $paper[] = "Recycled";
                $paper[] = "Acerbic";
                $paper[] = "Environmental";

                for ($j = 0; $j < count($paper); $j++)
                {
                    echo "$j: $paper[$j]<br/>";
                }

                $top_five_picks = array("New Orleans", "Memphis", "New York", "Los Angeles Lakers", "Cleveland");

                $top_three_picks["Pelicans"] = "New Orleans";
                $top_three_picks["Grizzlies"] = "Memphis";
                $top_three_picks["Knicks"] = "New York";

                echo $top_three_picks["Knicks"] . " fans are distraught they won't get Zion Williamson.<br>";
                // echo "$top_five_picks[0] is going to draft Zion Williamson.<br>";
                $i = 0;
                echo "The top 5 picks for the 2019 draft are:<br/>";
                foreach($top_five_picks as $pick) {
                    $i++;
                    echo $i . ". " .$pick . "<br>";
                }

                $job_sites = array(
                    'tm' => "trademe",
                    'sk' => "seek",
                    'yd' => "youdo"
                );

                // foreach($job_sites as $site => $desc) {
                //     echo $site . ": $desc <br>";
                // }
                while(list($site, $desc) = each($job_sites))
                echo "$desc<br>";


                $stationary = array (
                    'paper' => array(
                        'A4' => 'A4 White',
                        'A3' => 'A3 White',
                    ),
                    'pens' => array(
                        'ball' => 'marker',
                        'highliter' => 'Highlighters',
                        'marker' => "marker",
                    ),
                    "misc" => array(
                        'tape' => 'glue',
                        'clips' => "paperclips"
                    )
                    );

                    echo "<pre>";
                    foreach($stationary as $section => $items)
                        foreach($items as $key => $value)
                        echo "$section:\t$key\t($value)<br>";
                    echo "<pre>";

                    $chessboard = array(
                        array('r', 'n', 'k', 'n', 'k'),
                        array('-', '-', '-', '-', '-'),
                        array('-', '-', '-', '-', '-'),
                        array('-', '-', '-', '-', '-'),
                        array('-', '-', '-', '-', '-'),
                        array('R', 'N', 'K', 'N', 'K')
                    );

                    echo "<pre>";
                    foreach($chessboard as $row)
                    {
                        foreach($row as $piece)
                        echo "$piece";
                        echo "<br>";
                    }
                    echo "<pre>";
                    echo count($chessboard, 1);

                    $mixed_letters = array(
                        'V', 'K', 'R', 'A', 'G', 'B', 'L', 'J', 'W'
                    );
                    
                    echo "<pre>";
                    $str = "";
                    foreach($mixed_letters as $letter)
                    {
                        echo $str . "$letter, ";
                    }
                    echo $str;
                    echo "<pre>";
                    sort($mixed_letters);
                    $arr_srt = "";
                    foreach($mixed_letters as $letter)
                    {

                        echo $arr_srt . "$letter, ";
                    }
                    echo $arr_srt;
                    echo "<pre>";
                    shuffle($mixed_letters);
                    $str4 = "";
                    foreach($mixed_letters as $letter)
                    {
                        echo "$letter, ";
                    }
                    echo $sr4;
                    echo "<pre>";
                    echo "Hello";
                    echo "<pre>";
                    $tmp = explode(" ", "Get the fuck out of here with that weak sauce shit!!!!");
                    print_r($tmp);
            ?>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>