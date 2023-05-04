<?php
session_start();
require 'dbcon.php';

if (isset($_POST['save_user'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name,email,mobile,password) values('$name', '$email','$mobile','$password')";

    $result = mysqli_query($con, $sql);

    
    if($result)
    {
        echo("<script>console.log('Usuário deletado');</script>");
        header("Location: create_user.php");
    }
    else
    {
        echo("<script>console.log('Não foi possivel deletar o usuario');</script>");
        header("Location: create_user.php");
    }
}


?>