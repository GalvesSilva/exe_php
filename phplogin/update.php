<?php
session_start();
require 'dbcon.php';
$id = $_GET['userid'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update crud set name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo ("<script>console.log('Usuário criado');</script>");
    } else {
        echo ("<script>console.log('Não foi possivel cria ro ussári0');</script>");
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
    <?php
    $id = $_GET['userid'];

    $sql = "Select * from crud where id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name_row = $row['name'];
    $email_row = $row['email'];
    $mobile_row = $row['mobile'];
    $password_row = $row['password'];

    echo '
        <form method="post">
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" value='.$name_row.' autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" value='.$email_row.' autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Mobile</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" value='.$mobile_row.' autocomplete="off">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" value='.$password_row.' autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        <button class="btn btn-primary " name="submit">
            <a class="text-light link-offset-2 link-underline link-underline-opacity-0" href="display.php">
                Voltar
            </a>
        </button>
        </form>
    ';
    ?>
    </div>

</body>

</html>