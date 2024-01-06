<!-- updateUser.php?id=$id -->
<?php
include("connect.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "select * from users where id=$id;";
    $result = mysqli_query($con, $sql);
    $empDetails = mysqli_fetch_assoc($result);

    $username = $empDetails["username"];
    $salary = $empDetails["salary"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username2 = $_POST['username3'];
    $salary2 = $_POST['salary3'];

    $sql = "update users set username='$username2',salary=$salary2 where id=$id;";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data updated successfully";
        header('Location: display.php');
    } else {
        echo "data updated failure";
        die(mysqli_error($con));
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="username3" value=<?php echo $username ?>>
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary3" value=<?php echo $salary ?>>
            </div>
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</body>

</html>