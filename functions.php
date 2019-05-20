
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <head>
        <title>Functions and Objects</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <a href="index.php">Back to home</a>
            <hr/>
            <h1>Functions and Objects</h2>
            <hr/>
            <?php
                echo fix_names('william', 'HENRY', 'gATES');

                function fix_names($n1, $n2, $n3) {
                    $n1 = ucfirst(strtolower($n1));
                    $n2 = ucfirst(strtolower($n2));
                    $n3 = ucfirst(strtolower($n3));

                    return $n1 . " " . $n2 . " " . $n3 . "<br/>";
                }

                echo "Fixing up names returning values as an array<br>";

                $names = fix_names_arr('william', 'HENRY', 'gATES');
                echo $names[0] . " " . $names[1] . " " . $names[2] . "<br>";

                function fix_names_arr($n1, $n2, $n3) {
                    $n1 = ucfirst(strtolower($n1));
                    $n2 = ucfirst(strtolower($n2));
                    $n3 = ucfirst(strtolower($n3));

                    return array($n1, $n2, $n3);
                }
                echo "Passign values to a function by reference<br>";

                $a1 = 'wiiLLiaM';
                $a2 = 'HERNry';
                $a3 = 'GaTes';

                echo $a1 . " " . $a2 . " " . $a3 . "<br>";
                fix_names_ref($a1, $a2, $a3);
                echo $a1 . " " . $a2 . " " . $a3 . "<br>";
                

                function fix_names_ref(&$n1, &$n2, &$n3) {
                     $n1 = ucfirst(strtolower($n1));
                    $n2 = ucfirst(strtolower($n2));
                    $n3 = ucfirst(strtolower($n3));
                }

            ?>

            <?php
                require_once "include.php";
            ?>

            <?php
                if (function_exists("is_bool")) {
                    echo "Yes it is.<br/>";
                } else {
                    echo "No it isn't - better wrtite one";
                }
                    echo "My php version is " . phpversion() . "<br>";

                    echo "example";

                class User
                {
                    public $name;
                    function show_name(){
                        echo $this->name;
                    }
                    function __construct($p1)
                    {
                        $this->name = $p1;
                    }
                    // function __destruct()
                    // {
                    //     echo "Object is now destroyed";
                    // }
                }
                echo "<br>";
                $object1 = new User("Amy");
                $object1->show_name();

                class Translate
                {
                    const ENGLISH = 0;
                    const FRENCH = 1;
                    const SPAINISH = 2;

                    static function look_up()
                    {
                        echo self::SPAINISH;
                    }
                }

                class Subscriber extends User
                {
                    public $sub_status;
                    function __construct($ss)
                    {
                        $this->sub_status = $ss;
                    }
                }

                echo "<br>";
                $sub1 = new Subscriber('Y');
                $sub1->name="Steve";
                echo "<br>";
                echo "<br>";
                print_r($sub1)
              ?>
        </div>
        <script src="js/index.js"></script>
    </body>
</html>