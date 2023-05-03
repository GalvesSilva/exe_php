<?php 
    require 'dbcon.php';

    if(isset($_GET['deleteid'])){

        $user_id = $_GET['deleteid'];
    
        $sql = "delete from crud where id=$user_id";
        $result = mysqli_query($con, $sql);
    
        if($result)
        {
            echo("<script>console.log('Usuário deletado');</script>");
            header("Location: display.php");
        }
        else
        {
            echo("<script>console.log('Não foi possivel deletar o usuario');</script>");
            header("Location: display.php");
        }
    }
?>