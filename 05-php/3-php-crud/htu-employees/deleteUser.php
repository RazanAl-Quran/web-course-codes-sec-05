<!-- deleteUser.php?id2=$id -->

<?php
include("connect.php");

if (isset($_GET["id2"])) {
    $id = $_GET["id2"];
    $sql = "delete from users where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo ('your employee has been deleted');
        header('Location: display.php');

    } else {
        die(mysqli_error($con));
    }
}

?>