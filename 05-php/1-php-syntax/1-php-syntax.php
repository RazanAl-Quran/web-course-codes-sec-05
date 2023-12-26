<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello form my first PHP</h1>
    <?php
    echo "hello form my PHP";
    echo "<h2>hello form my PHP</h2>";

    // this is a comment
    # this is a comment
    /*this a multi 
    line comments*/

    // In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
    echo "Hello World!<br>";
    // ECHO "Hello World!<br>";
    // EcHo "Hello World!<br>";
    
    $username = "sherry";
    echo $username;
    echo "<p>$username</p>";

    $txt = "Website Course";
    echo 'hello<br>';
    echo "hello<br>";
    echo "I like $txt!<br>";
    echo 'I like $txt!<br>';

    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My car is $color <br>";

    $txt1 = "Learn PHP";
    echo "<h2>" . $txt1 . "</h2>";
    echo "<h2> $txt1 </h2>";

    $count = 5;
    var_dump($count);
    echo "<br>";

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";

    // Change Data Type
    $x1 = 5;
    var_dump($x1);
    echo "<br>";
    $x1 = (string) $x1;
    var_dump($x1);
    echo "<br>";

    echo strlen("Hello world!");


    // Create a PHP Constant
    echo "<br>";
    define("GREETING", "Welcome to HTU!");
    echo GREETING;
    echo "<br>";
    const MYCAR = "Volvo";
    echo MYCAR;


    // Ternary IF
    echo "<br>";
    $a = 13;
    $b = $a < 10 ? "Hello" : "Good Bye";
    // if($a<10) {
    //     $b = "Hello";
    // } else {
    //     $b="Good Bye";
    // }
    echo $b;
    echo "<br>";


    // Arrays
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo "<br>";


    // Associative Arrays
    $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");
    // echo $students[0];
    echo $students["Ahmad"];
    echo "<br>";
    foreach ($students as $name => $major) {
        echo "Key=" . $name . ", Value=" . $major;
        echo "<br>";
    }


    // Loop
    for ($i = 0; $i < count($cars); $i++) {
        echo $cars[$i] . "<br>";
    }




    ?>
</body>

</html>