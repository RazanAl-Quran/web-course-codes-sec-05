<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["username2"]) && $_COOKIE["id2"]) {
        echo "<p> name value is " . $_COOKIE['username2'] . "</p>";
        echo "<p> id value is " . $_COOKIE['id2'] . "</p>";
    }
    ?>
</body>

</html>