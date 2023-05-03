<?php 
    $con = mysqli_connect("localhost","root","root","crudteste");

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }
?>